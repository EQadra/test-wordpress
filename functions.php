<?php
/**
 * Funciones del tema
 */

// Evitar acceso directo
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Cargar estilos y scripts
function mi_tema_enqueue_scripts() {
    // Bootstrap CSS
    wp_enqueue_style(
        'bootstrap-css',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css',
        array(),
        '5.3.2'
    );

    // Estilos del tema
    wp_enqueue_style(
        'mi-tema-style',
        get_stylesheet_uri(),
        array('bootstrap-css'),
        wp_get_theme()->get('Version')
    );

    // Bootstrap JS (con Popper incluido)
    wp_enqueue_script(
        'bootstrap-js',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js',
        array('jquery'),
        '5.3.2',
        true
    );
}
add_action('wp_enqueue_scripts', 'mi_tema_enqueue_scripts');

// Registrar menús y soporte de imágenes
function mi_tema_setup() {
    // Menús
    register_nav_menus( array(
        'menu-principal' => __( 'Menú Principal', 'mi-tema' ),
    ) );

    // Soporte para imágenes destacadas
    add_theme_support('post-thumbnails');

    // Opcional: definir tamaños personalizados
    // set_post_thumbnail_size( 800, 600, true ); // recorte exacto
    // add_image_size( 'miniatura-cuadrada', 300, 300, true );
}
add_action( 'after_setup_theme', 'mi_tema_setup' );

// Incluir Navwalker
function mi_tema_register_navwalker() {
    require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'mi_tema_register_navwalker' );
// Procesar el formulario de contacto
function procesar_formulario_contacto() {
    // Verificar nonce para seguridad
    if (!isset($_POST['contacto_nonce_field']) || !wp_verify_nonce($_POST['contacto_nonce_field'], 'contacto_nonce')) {
        wp_die('Error de seguridad');
    }
    
    // Sanitizar y validar datos
    $firstName = sanitize_text_field($_POST['firstName']);
    $lastName = sanitize_text_field($_POST['lastName']);
    $email = sanitize_email($_POST['email']);
    $phone = sanitize_text_field($_POST['phone']);
    $inquiryType = sanitize_text_field($_POST['inquiryType']);
    $hearAboutUs = sanitize_text_field($_POST['hearAboutUs']);
    $message = sanitize_textarea_field($_POST['message']);
    
    // Aquí puedes:
    // 1. Guardar en la base de datos
    // 2. Enviar por correo electrónico
    // 3. Integrar con un CRM
    
    // Ejemplo: Enviar por correo
    $to = get_option('admin_email');
    $subject = 'Nuevo mensaje de contacto de ' . $firstName . ' ' . $lastName;
    $body = "
        Nombre: $firstName $lastName
        Email: $email
        Teléfono: $phone
        Tipo de consulta: $inquiryType
        Cómo nos conoció: $hearAboutUs
        Mensaje: $message
    ";
    $headers = array('Content-Type: text/plain; charset=UTF-8');
    
    wp_mail($to, $subject, $body, $headers);
    
    // Redirigir con mensaje de éxito
    wp_redirect(add_query_arg('contacto', 'exito', wp_get_referer()));
    exit;
}

// Para usuarios logueados y no logueados
add_action('admin_post_nopriv_procesar_formulario_contacto', 'procesar_formulario_contacto');
add_action('admin_post_procesar_formulario_contacto', 'procesar_formulario_contacto');


// Registrar script AJAX
function agregar_script_ajax_formulario() {
    wp_register_script('ajax-form-script', get_template_directory_uri() . '/js/ajax-form.js', array('jquery'), null, true);
    
    wp_localize_script('ajax-form-script', 'ajax_form_object', array(
        'ajaxurl' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('ajax_contact_nonce')
    ));
    
    wp_enqueue_script('ajax-form-script');
}
add_action('wp_enqueue_scripts', 'agregar_script_ajax_formulario');

// Procesar AJAX
function procesar_ajax_formulario() {
    check_ajax_referer('ajax_contact_nonce', 'nonce');
    
    // Sanitizar y validar datos (igual que antes)
    $firstName = sanitize_text_field($_POST['firstName']);
    // ... procesar otros campos
    
    // Procesar el formulario
    
    wp_send_json_success('Mensaje enviado con éxito');
}
add_action('wp_ajax_procesar_formulario_contacto', 'procesar_ajax_formulario');
add_action('wp_ajax_nopriv_procesar_formulario_contacto', 'procesar_ajax_formulario');


// Shortcode para mostrar el formulario
function mostrar_formulario_contacto() {
    ob_start();
    ?>
    <div class="container">
        <div class="contact-form-container">
        <div class="header-section">
                <h1>Let's Connect</h1>
                <p>We're excited to connect with you and learn more about your real estate goals. Use the form below to get in touch with Estonian. Whether you're a prospective client, partner or simply curious about our services, we're here to answer your questions and provide the assistance you need.</p>
            </div>

            <!-- Alertas para mostrar mensajes -->
            <div id="successAlert" class="alert alert-success" role="alert">
                Formulario enviado con éxito. Nos pondremos en contacto contigo pronto.
            </div>
            <div id="errorAlert" class="alert alert-danger" role="alert">
                Ha ocurrido un error. Por favor, intenta nuevamente.
            </div>

            <form id="contactForm" action="<?php echo admin_url('admin-post.php'); ?>" method="post">
                <input type="hidden" name="action" value="procesar_formulario_contacto">
                <?php wp_nonce_field('contacto_nonce', 'contacto_nonce_field'); ?>
                
                <div class="row">
                    <div class="col-md-6">
                        <label for="firstName" class="form-label required-field">First Name</label>
                        <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Enter First Name" required>
                    </div>
                    <div class="col-md-6">
                        <label for="lastName" class="form-label required-field">Last Name</label>
                        <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Enter Last Name" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <label for="email" class="form-label required-field">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your Email" required>
                    </div>
                    <div class="col-md-6">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter Phone Number">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <label for="inquiryType" class="form-label required-field">Inquiry Type</label>
                        <select class="form-select" id="inquiryType" name="inquiryType" required>
                            <option selected disabled value="">Select Inquiry Type</option>
                            <option value="buying">Buying a Property</option>
                            <option value="selling">Selling a Property</option>
                            <option value="renting">Renting</option>
                            <option value="partnership">Partnership</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="hearAboutUs" class="form-label">How Did You Hear About Us?</label>
                        <select class="form-select" id="hearAboutUs" name="hearAboutUs">
                            <option selected disabled value="">Select</option>
                            <option value="search">Search Engine</option>
                            <option value="social">Social Media</option>
                            <option value="friend">Friend/Relative</option>
                            <option value="ad">Advertisement</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                </div>

                <div class="divider"></div>

                <div class="mb-3">
                    <label for="message" class="form-label required-field">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="5" placeholder="Enter your Message here." required></textarea>
                </div>

                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" id="agreeTerms" name="agreeTerms" required>
                    <label class="form-check-label privacy-text" for="agreeTerms">
                        I agree with Terms of Use and Privacy Policy
                    </label>
                </div>

                <button type="submit" class="btn btn-primary btn-submit">Submit</button>
            </form>
        </div>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('formulario_contacto', 'mostrar_formulario_contacto');