<!DOCTYPE html>
<html lang="en">
<head>
   <title>Moodboard - Epic Quest Games</title>
   <?=view('components/head')?>
</head>
<body>
  <?=view('components/button')?>
  
  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h3>Moodboard</h3>
        </div>
      </div>
    </div>
  </div>
  <!-- 🎨 Color System -->
  <section class="mb-5">
    <h3 class="fw-bold mb-3 text-dark">🎨 Color System</h3>
    <p class="text-muted">The main brand palette used throughout Epic Quest Games projects.</p>

    <div class="d-flex justify-content-center gap-4 flex-wrap">
      <div class="text-center">
        <div style="width:80px; height:80px; background-color:#007bff; border-radius:8px;"></div>
        <small class="d-block mt-2 text-muted">Primary Blue<br>#007bff</small>
      </div>
      <div class="text-center">
        <div style="width:80px; height:80px; background-color:#28a745; border-radius:8px;"></div>
        <small class="d-block mt-2 text-muted">Success Green<br>#28a745</small>
      </div>
      <div class="text-center">
        <div style="width:80px; height:80px; background-color:#6c757d; border-radius:8px;"></div>
        <small class="d-block mt-2 text-muted">Secondary Gray<br>#6c757d</small>
      </div>
      <div class="text-center">
        <div style="width:80px; height:80px; background-color:#ffc107; border-radius:8px;"></div>
        <small class="d-block mt-2 text-muted">Accent Yellow<br>#ffc107</small>
      </div>
    </div>
  </section>

  <!-- 🔠 Typography -->
  <section class="mb-5">
    <h3 class="fw-bold mb-3 text-dark">🔠 Typography</h3>
    <p class="text-muted mb-4">A balance of readable and characterful fonts to match the fantasy-adventure aesthetic.</p>

    <div class="row text-center">
      <div class="col-md-6 mb-4">
        <h4 class="fw-bold" style="font-family: 'Poppins', sans-serif;">Poppins (Body Text)</h4>
        <p style="font-family: 'Poppins', sans-serif;">Used for clean, modern user interface text and body copy.</p>
      </div>
      <div class="col-md-6 mb-4">
        <h4 class="fw-bold" style="font-family: 'Roboto Slab', serif;">Roboto Slab (Headings)</h4>
        <p style="font-family: 'Roboto Slab', serif;">Used for bold, thematic headings and in-game titles.</p>
      </div>
    </div>
  </section>

  <!-- 🔘 Buttons -->
  <section class="mb-5 text-center">
    <h3 class="fw-bold mb-3 text-dark">🔘 Buttons</h3>
    <p class="text-muted mb-4">Consistent button styles for various UI states.</p>

    <div class="d-flex justify-content-center gap-3 flex-wrap">
      <button class="btn btn-primary">Primary</button>
      <button class="btn btn-secondary">Secondary</button>
      <button class="btn btn-outline-secondary">Border</button>
      <button class="btn btn-outline-warning">Accent</button>
      <button class="btn btn-light" disabled>Disabled</button>
    </div>
  </section>

  <!-- 🧱 Moodboard Cards (existing content) -->
  <section class="mb-5">
    <div class="row g-4 justify-content-center">
      <div class="col-md-3">
        <div class="card border-0 shadow-sm">
          <div class="card-body text-center">
            <h5 class="card-title text-warning">Fantasy Worlds</h5>
            <p class="card-text">Immersive landscapes inspired by epic tales.</p>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card border-0 shadow-sm">
          <div class="card-body text-center">
            <h5 class="card-title text-warning">Character Designs</h5>
            <p class="card-text">Stylized heroes and mythical creatures.</p>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card border-0 shadow-sm">
          <div class="card-body text-center">
            <h5 class="card-title text-warning">Atmosphere & Lighting</h5>
            <p class="card-text">Moody color palettes and dynamic light.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<?=view('components/footer')?>
<?=view('components/javascript')?>
</body>

</html>
