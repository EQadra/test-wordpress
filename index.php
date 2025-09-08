<?php get_header();?>
<!-- **************************************************************************************************** -->


<!-- start hero and categorys ection -->
    <div class="container">
    <div class="blog-header">
      <!-- <h1 class="blog-title"><?php bloginfo('name'); ?></h1>
      <p class="lead blog-description"><?php bloginfo('description'); ?></p> -->
    </div>
  
<section class="hero">
<div class="container-fluid">
<div class="row g-0 w-100">
  
  <!-- Texto 50% -->
  <div class="col-lg-6 d-flex align-items-center">
    <div class="content ">
      <h1>Discover Your Dream Property with Estatein</h1>
      <p class="my-4">Your journey to finding the perfect property begins here. Explore our listings to find the home that matches your dreams.</p>
      <div class="d-flex gap-3">
        <a href="#" class="btn btn-outline-light">Learn More</a>
        <a href="#" class="btn btn-primary-custom">Browse Properties</a>
      </div>

      <!-- Stats -->
      <div class="row mt-4 p-3">
        <div class="col-md-4">
          <div class="stats-box">
            <h4>200+</h4>
            <p>Happy Customers</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="stats-box">
            <h4>10k+</h4>
            <p>Properties for Clients</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="stats-box">
            <h4>16+</h4>
            <p>Years of Experience</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Imagen 50% -->
  <div class="col-lg-6 position-relative">
    <img src="<?php bloginfo('template_url'); ?>/assets/images/Container.png" class="hero-image" alt="Building">
  </div>
</div>
</div>

<!-- círculo decorativo -->
<div class="circle-decor">
  <img src="<?php bloginfo('template_url'); ?>/assets/images/Sub Container.png" class="hero-image" alt="Building">
</div>
</section>

<!-- Divider -->
<div class="section-divider"></div>

<!-- Features Section -->
<!-- Features Section -->
<section class="features container-fluid p-5">
  <div class="row g-4">
    <div class="col-md-3">
      <div class="feature-card position-relative p-3">
        <!-- Icono flecha arriba derecha -->
        <i class="fas fa-arrow-right position-absolute top-0 end-0 m-2"></i>

        <img src="<?php bloginfo('template_url'); ?>/assets/images/Icon Container (1).png" alt="Icon">
        <h6>Find Your Dream Home</h6>
      </div>
    </div>

    <div class="col-md-3">
      <div class="feature-card position-relative p-3">
        <i class="fas fa-arrow-right position-absolute top-0 end-0 m-2"></i>
        <img src="<?php bloginfo('template_url'); ?>/assets/images/Icon Container (2).png" alt="Icon">
        <h6>Unlock Property Value</h6>
      </div>
    </div>

    <div class="col-md-3">
      <div class="feature-card position-relative p-3">
        <i class="fas fa-arrow-right position-absolute top-0 end-0 m-2"></i>
        <img src="<?php bloginfo('template_url'); ?>/assets/images/Icon Container (3).png" alt="Icon">
        <h6>Effortless Property Management</h6>
      </div>
    </div>

    <div class="col-md-3">
      <div class="feature-card position-relative p-3">
        <i class="fas fa-arrow-right position-absolute top-0 end-0 m-2"></i>
        <img src="<?php bloginfo('template_url'); ?>/assets/images/Icon Container (4).png" alt="Icon">
        <h6>Smart Investments, Informed Decisions</h6>
      </div>
    </div>
  </div>
</section>

<!-- Font Awesome CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<!-- end of category section -->

<!-- start neew section list of properties -->

<section class="container py-5">
  <div class="d-flex justify-content-between align-items-center mb-3">
    <h2 class="fw-bold">Featured Properties</h2>
    <a href="#" class="btn btn-outline-light">View All Properties</a>
  </div>
  <p class="text-light">
    Explore our handpicked selection of featured properties. Each listing offers a glimpse into exceptional homes <br> 
    and investments available through Estatein. Click "View Details" for more information.
  </p>
</section>
  
<section class="container py-5">
  <div id="cardCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
  
      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="container">
          <div class="row g-4 justify-content-center">
            <div class="col-md-4">
              <div class="card card-custom">
                <img src="https://picsum.photos/400/200?random=1" class="card-img-top" alt="Property">
                <div class="card-body">
                  <!-- Nombre de la propiedad -->
                  <h5 class="card-title text-warning">Luxury Beachfront Villa</h5>
                  
                  <!-- Detalle + Read More -->
                  <p class="card-text">
                    Stunning villa located near the coast, perfect for vacations.
                    <a href="#" class="text-decoration-none text-warning">Read More</a>
                  </p>
                  
                  <!-- Badges -->
                  <div class="mb-3">
                    <span class="badge bg-secondary me-1">2 Bedrooms</span>
                    <span class="badge bg-secondary me-1">2 Bathrooms</span>
                    <span class="badge bg-secondary">Villa</span>
                  </div>
                  
                  <!-- Precio + Botón -->
                  <div class="d-flex justify-content-between align-items-center">
                    <div>
                      <small class="text-muted">Price</small>
                      <h6 class="mb-0 text-light">$250,000</h6>
                    </div>
                    <a href="#" class="btn btn-sm" style="background-color:#6f42c1; color:#fff; border-radius:8px;">
                      View Property Details
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-custom">
                <img src="https://picsum.photos/400/200?random=1" class="card-img-top" alt="Property">
                <div class="card-body">
                  <!-- Nombre de la propiedad -->
                  <h5 class="card-title text-warning">Luxury Beachfront Villa</h5>
                  
                  <!-- Detalle + Read More -->
                  <p class="card-text">
                    Stunning villa located near the coast, perfect for vacations.
                    <a href="#" class="text-decoration-none text-warning">Read More</a>
                  </p>
                  
                  <!-- Badges -->
                  <div class="mb-3">
                    <span class="badge bg-secondary me-1">2 Bedrooms</span>
                    <span class="badge bg-secondary me-1">2 Bathrooms</span>
                    <span class="badge bg-secondary">Villa</span>
                  </div>
                  
                  <!-- Precio + Botón -->
                  <div class="d-flex justify-content-between align-items-center">
                    <div>
                      <small class="text-muted">Price</small>
                      <h6 class="mb-0 text-light">$250,000</h6>
                    </div>
                    <a href="#" class="btn btn-sm" style="background-color:#6f42c1; color:#fff; border-radius:8px;">
                      View Property Details
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-custom">
                <img src="https://picsum.photos/400/200?random=1" class="card-img-top" alt="Property">
                <div class="card-body">
                  <!-- Nombre de la propiedad -->
                  <h5 class="card-title text-warning">Luxury Beachfront Villa</h5>
                  
                  <!-- Detalle + Read More -->
                  <p class="card-text">
                    Stunning villa located near the coast, perfect for vacations.
                    <a href="#" class="text-decoration-none text-warning">Read More</a>
                  </p>
                  
                  <!-- Badges -->
                  <div class="mb-3">
                    <span class="badge bg-secondary me-1">2 Bedrooms</span>
                    <span class="badge bg-secondary me-1">2 Bathrooms</span>
                    <span class="badge bg-secondary">Villa</span>
                  </div>
                  
                  <!-- Precio + Botón -->
                  <div class="d-flex justify-content-between align-items-center">
                    <div>
                      <small class="text-muted">Price</small>
                      <h6 class="mb-0 text-light">$250,000</h6>
                    </div>
                    <a href="#" class="btn btn-sm" style="background-color:#6f42c1; color:#fff; border-radius:8px;">
                      View Property Details
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  
      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="container">
          <div class="row g-4 justify-content-center">
            <div class="col-md-4">
              <div class="card card-custom">
                <img src="https://picsum.photos/400/200?random=1" class="card-img-top" alt="Property">
                <div class="card-body">
                  <!-- Nombre de la propiedad -->
                  <h5 class="card-title text-warning">Luxury Beachfront Villa</h5>
                  
                  <!-- Detalle + Read More -->
                  <p class="card-text">
                    Stunning villa located near the coast, perfect for vacations.
                    <a href="#" class="text-decoration-none text-warning">Read More</a>
                  </p>
                  
                  <!-- Badges -->
                  <div class="mb-3">
                    <span class="badge bg-secondary me-1">2 Bedrooms</span>
                    <span class="badge bg-secondary me-1">2 Bathrooms</span>
                    <span class="badge bg-secondary">Villa</span>
                  </div>
                  
                  <!-- Precio + Botón -->
                  <div class="d-flex justify-content-between align-items-center">
                    <div>
                      <small class="text-muted">Price</small>
                      <h6 class="mb-0 text-light">$250,000</h6>
                    </div>
                    <a href="#" class="btn btn-sm" style="background-color:#6f42c1; color:#fff; border-radius:8px;">
                      View Property Details
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-custom">
                <img src="https://picsum.photos/400/200?random=1" class="card-img-top" alt="Property">
                <div class="card-body">
                  <!-- Nombre de la propiedad -->
                  <h5 class="card-title text-warning">Luxury Beachfront Villa</h5>
                  
                  <!-- Detalle + Read More -->
                  <p class="card-text">
                    Stunning villa located near the coast, perfect for vacations.
                    <a href="#" class="text-decoration-none text-warning">Read More</a>
                  </p>
                  
                  <!-- Badges -->
                  <div class="mb-3">
                    <span class="badge bg-secondary me-1">2 Bedrooms</span>
                    <span class="badge bg-secondary me-1">2 Bathrooms</span>
                    <span class="badge bg-secondary">Villa</span>
                  </div>
                  
                  <!-- Precio + Botón -->
                  <div class="d-flex justify-content-between align-items-center">
                    <div>
                      <small class="text-muted">Price</small>
                      <h6 class="mb-0 text-light">$250,000</h6>
                    </div>
                    <a href="#" class="btn btn-sm" style="background-color:#6f42c1; color:#fff; border-radius:8px;">
                      View Property Details
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-custom">
                <img src="https://picsum.photos/400/200?random=1" class="card-img-top" alt="Property">
                <div class="card-body">
                  <!-- Nombre de la propiedad -->
                  <h5 class="card-title text-warning">Luxury Beachfront Villa</h5>
                  
                  <!-- Detalle + Read More -->
                  <p class="card-text">
                    Stunning villa located near the coast, perfect for vacations.
                    <a href="#" class="text-decoration-none text-warning">Read More</a>
                  </p>
                  
                  <!-- Badges -->
                  <div class="mb-3">
                    <span class="badge bg-secondary me-1">2 Bedrooms</span>
                    <span class="badge bg-secondary me-1">2 Bathrooms</span>
                    <span class="badge bg-secondary">Villa</span>
                  </div>
                  
                  <!-- Precio + Botón -->
                  <div class="d-flex justify-content-between align-items-center">
                    <div>
                      <small class="text-muted">Price</small>
                      <h6 class="mb-0 text-light">$250,000</h6>
                    </div>
                    <a href="#" class="btn btn-sm" style="background-color:#6f42c1; color:#fff; border-radius:8px;">
                      View Property Details
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  
    </div>
  
    <!-- Controles + contador -->
    <div class="carousel-controls-wrapper">
      <div class="carousel-counter" id="carouselCounter">01 of 02</div>
      <div class="carousel-controls">
        <button type="button" data-bs-target="#cardCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </button>
        <button type="button" data-bs-target="#cardCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon"></span>
        </button>
      </div>
    </div>
  </div>
</section>

<section class="container py-5">
<div class="d-flex justify-content-between align-items-center mb-3">
  <h2 class="fw-bold">What our clients say</h2>
  <a href="#" class="btn btn-outline-light">View All Properties</a>
</div>
<p class="text-light">
  Explore our handpicked selection of featured properties. Each listing offers a glimpse into exceptional homes <br>
  and investments available through Estatein. Click "View Details" for more information.
</p>
</section>
  
<section class="container text-center text-md-start py-5 border-bottom">
  <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="container">
          <div class="row g-4 justify-content-center">
            
            <div class="col-md-4">
              <div class="card card-custom p-3 h-100">
                <!-- Estrellas -->
                <div class="mb-2 text-warning">
                  ★★★★☆
                </div>
                <!-- Título -->
                <h5 class="card-title">Excelente servicio</h5>
                <!-- Descripción -->
                <p class="card-text">
                  Estoy muy satisfecho con la atención recibida. 
                  El equipo me acompañó en todo el proceso y 
                  resolvieron mis dudas rápidamente. 
                  Lo recomiendo sin dudarlo.
                </p>
                <!-- Perfil -->
                <div class="d-flex align-items-center mt-auto">
                  <img src="https://picsum.photos/50?random=1" class="rounded-circle me-3" alt="Profile" style="width:35px; height:35px; object-fit:cover;">
                  <div>
                    <span class="badge bg-dark">Juan Pérez</span><br>
                    <small class="text-muted">Ingeniero Civil</small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card card-custom p-3 h-100">
                <div class="mb-2 text-warning">★★★★★</div>
                <h5 class="card-title">Muy profesionales</h5>
                <p class="card-text">
                  Desde el primer contacto hasta la entrega final, 
                  todo fue muy organizado. 
                  Me sentí acompañado en cada paso 
                  y volvería a elegirlos.
                </p>
                <div class="d-flex align-items-center mt-auto">
                  <img src="https://picsum.photos/50?random=2" class="rounded-circle me-3" alt="Profile" style="width:35px; height:35px; object-fit:cover;">
                  <div>
                    <span class="badge bg-dark">María Gómez</span><br>
                    <small class="text-muted">Arquitecta</small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card card-custom p-3 h-100">
                <div class="mb-2 text-warning">★★★★☆</div>
                <h5 class="card-title">Muy buena experiencia</h5>
                <p class="card-text">
                  La comunicación fue clara en todo momento. 
                  Encontré justo lo que estaba buscando 
                  y el proceso fue más fácil de lo que esperaba.
                </p>
                <div class="d-flex align-items-center mt-auto">
                  <img src="https://picsum.photos/50?random=3" class="rounded-circle me-3" alt="Profile" style="width:35px; height:35px; object-fit:cover;">
                  <div>
                    <span class="badge bg-dark">Carlos López</span><br>
                    <small class="text-muted">Diseñador Gráfico</small>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="container">
          <div class="row g-4 justify-content-center">

            <div class="col-md-4">
              <div class="card card-custom p-3 h-100">
                <div class="mb-2 text-warning">★★★★★</div>
                <h5 class="card-title">Increíble atención</h5>
                <p class="card-text">
                  El personal se mostró muy comprometido 
                  en ayudarme a encontrar la mejor opción. 
                  Sin duda volvería a confiar en ellos.
                </p>
                <div class="d-flex align-items-center mt-auto">
                  <img src="https://picsum.photos/50?random=4" class="rounded-circle me-3" alt="Profile" style="width:35px; height:35px; object-fit:cover;">
                  <div>
                    <span class="badge bg-dark">Ana Torres</span><br>
                    <small class="text-muted">Abogada</small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card card-custom p-3 h-100">
                <div class="mb-2 text-warning">★★★★☆</div>
                <h5 class="card-title">Gran experiencia</h5>
                <p class="card-text">
                  Todo el proceso fue muy transparente 
                  y eficiente. Estoy realmente contento 
                  con los resultados obtenidos.
                </p>
                <div class="d-flex align-items-center mt-auto">
                  <img src="https://picsum.photos/50?random=5" class="rounded-circle me-3" alt="Profile" style="width:35px; height:35px; object-fit:cover;">
                  <div>
                    <span class="badge bg-dark">Pedro Ramírez</span><br>
                    <small class="text-muted">Contador</small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card card-custom p-3 h-100">
                <div class="mb-2 text-warning">★★★★★</div>
                <h5 class="card-title">Altamente recomendable</h5>
                <p class="card-text">
                  Todo salió mejor de lo esperado. 
                  La dedicación del equipo fue sobresaliente 
                  y los resultados hablan por sí solos.
                </p>
                <div class="d-flex align-items-center mt-auto">
                  <img src="https://picsum.photos/50?random=6" class="rounded-circle me-3" alt="Profile" style="width:35px; height:35px; object-fit:cover;">
                  <div>
                    <span class="badge bg-dark">Laura Méndez</span><br>
                    <small class="text-muted">Marketing</small>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

    </div>

    <!-- Controles + contador -->
    <div class="carousel-controls-wrapper d-flex justify-content-between align-items-center mt-3">
      <div class="carousel-counter" id="carouselCounter2">01 of 02</div>
      <div class="carousel-controls">
        <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev" class="btn btn-outline-dark btn-sm">
          <span class="carousel-control-prev-icon"></span>
        </button>
        <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next" class="btn btn-outline-dark btn-sm">
          <span class="carousel-control-next-icon"></span>
        </button>
      </div>
    </div>
  </div>
</section>

<!-- end properties -->
<!--  -->
<section class="container py-5">
  <div class="d-flex justify-content-between align-items-center mb-3">
    <h2 class="fw-bold">Preguntas Frecuentes</h2>
    <a href="#" class="btn btn-outline-light">View All Properties</a>
  </div>
  <p class="text-light">
    Explore our handpicked selection of featured properties. Each listing offers a glimpse into exceptional homes <br>
    and investments available through Estatein. Click "View Details" for more information.
  </p>
  </section>

  <section class="container text-center text-md-start py-5 border-bottom">
    <div id="cardCarousel3" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
  
        <!-- Slide 1 -->
        <div class="carousel-item active">
          <div class="container">
            <div class="row g-4 justify-content-center">
              
              <div class="col-md-4">
                <div class="card h-100 d-flex flex-row card-custom">
                  <!-- Lado izquierdo oscuro -->
                  <div class="card-body bg-dark text-white p-4 w-50 d-flex flex-column justify-content-center">
                    <h5 class="card-title">Highlighted Title</h5>
                    <p class="card-text">Some quick example text.</p>
                    <a href="#" class="btn btn-outline-light btn-sm mt-2 w-33 rounded-pill">
                      Ver más
                    </a>
                                      </div>
                  <!-- Lado derecho claro -->
                 
                </div>
              </div>
  
              <div class="col-md-4">
                <div class="card h-100 d-flex flex-row card-custom">
                  <div class="card-body bg-dark text-white p-4 w-50 d-flex flex-column justify-content-center">
                    <h5 class="card-title">Highlighted Title</h5>
                    <p class="card-text">Some quick example text.</p>
                    <a href="#" class="btn btn-outline-light btn-sm mt-2 w-33 rounded-pill">
                      Ver más
                    </a>
                                      </div>
                 
                </div>
              </div>
  
              <div class="col-md-4">
                <div class="card h-100 d-flex flex-row card-custom">
                  <div class="card-body bg-dark text-white p-4 w-50 d-flex flex-column justify-content-center">
                    <h5 class="card-title">Highlighted Title</h5>
                    <p class="card-text">Some quick example text.</p>
                    <a href="#" class="btn btn-outline-light btn-sm mt-2 w-33 rounded-pill">
                      Ver más
                    </a>
                                      </div>
                  
                </div>
              </div>
  
            </div>
          </div>
        </div>
  
        <!-- Slide 2 -->
        <div class="carousel-item">
          <div class="container">
            <div class="row g-4 justify-content-center">
  
              <div class="col-md-4">
                <div class="card h-100 d-flex flex-row card-custom">
                  <div class="card-body bg-dark text-white p-4 w-50 d-flex flex-column justify-content-center">
                    <h5 class="card-title">Another Title</h5>
                    <p class="card-text">Some description here.</p>
                    <a href="#" class="btn btn-outline-light btn-sm mt-2 w-33 rounded-pill">
                      Ver más
                    </a>
                                      </div>
                 
                </div>
              </div>
  
              <div class="col-md-4">
                <div class="card h-100 d-flex flex-row card-custom">
                  <div class="card-body bg-dark text-white p-4 w-50 d-flex flex-column justify-content-center">
                    <h5 class="card-title">Another Title</h5>
                    <p class="card-text">Some description here.</p>
                    <a href="#" class="btn btn-outline-light btn-sm mt-2 w-33 rounded-pill">
                      Ver más
                    </a>
                                      </div>
                 
                </div>
              </div>
  
              <div class="col-md-4">
                <div class="card h-100 d-flex flex-row card-custom">
                  <div class="card-body bg-dark text-white p-4 w-50 d-flex flex-column justify-content-center">
                    <h5 class="card-title">Another Title</h5>
                    <p class="card-text">Some description here.</p>
                    <a href="#" class="btn btn-outline-light btn-sm mt-2 w-33 rounded-pill">
                      Ver más
                    </a>
                                      </div>
                  
                </div>
              </div>
  
            </div>
          </div>
        </div>
  
      </div>
  
      <!-- Controles + contador -->
      <div class="carousel-controls-wrapper d-flex justify-content-between align-items-center mt-3">
        <div class="carousel-counter" id="carouselCounter3">01 of 02</div>
        <div class="carousel-controls">
          <button type="button" data-bs-target="#cardCarousel3" data-bs-slide="prev" class="btn btn-outline-dark btn-sm">
            <span class="carousel-control-prev-icon"></span>
          </button>
          <button type="button" data-bs-target="#cardCarousel3" data-bs-slide="next" class="btn btn-outline-dark btn-sm">
            <span class="carousel-control-next-icon"></span>
          </button>
        </div>
      </div>
    </div>
  </section>

  <div  class="header-section formSend">
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
  
<!-- end properties -->
<!--  -->

<!-- CTA Section -->
<section class="container text-center text-md-start py-5 border-bottom">
  <div class="row align-items-center">
    <div class="col-md-8">
      <h2 class="fw-bold">Start Your Real Estate Journey Today</h2>
      <p class="text-light">
        Your dream property is just a click away. Whether you're looking for a new home, a strategic investment, 
        or expert real estate advice, Estatein is here to assist you every step of the way. Take the first step towards 
        your real estate goals and explore our available properties or get in touch with our team for personalized assistance.
      </p>
    </div>
    <div class="col-md-4 text-md-end">
      <a href="#" class="btn btn-primary">Explore Properties</a>
    </div>
  </div>
</section>

<!-- **************************************************************************************************** -->

<?php get_footer();?>
<!-- **************************************************************************************************** -->

