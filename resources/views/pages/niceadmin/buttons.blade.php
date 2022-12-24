@extends('layouts.themes.NiceAdmin.app')

@section('breadcrumb')
    @php
    $links = ["Components","Buttons"];
    @endphp
    <x-niceadmin.breadcrumb :links="$links" title="Buttons" />
@endsection

@section('page-title','NiceAdmin Theme Buttons')

@section('content')

    <p class="instrucciones">
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio vitae, voluptatibus nobis officia voluptatem sunt tempore tenetur velit ad, commodi numquam quae repudiandae ipsum! Laudantium illum fugiat distinctio dolor. Reiciendis!
        Rem cumque a fugiat perspiciatis nesciunt, ipsam eos numquam reprehenderit quam praesentium necessitatibus iusto possimus facere consectetur atque minima in dolor recusandae, cupiditate at illo provident! Voluptatum corporis commodi sunt.
        Repudiandae eaque natus atque ex ab porro molestiae culpa iure odit quos. Porro, praesentium labore animi quibusdam nobis delectus commodi doloremque blanditiis laboriosam obcaecati nisi id incidunt ipsum sit laudantium.
    </p>

                                                            <h5 class="card-title">Default Buttons</h5>


    <button type="button" class="btn btn-primary"   >Primary    </button>
    <button type="button" class="btn btn-secondary" >Secondary  </button>
    <button type="button" class="btn btn-success"   >Success    </button>
    <button type="button" class="btn btn-danger"    >Danger     </button>
    <button type="button" class="btn btn-warning"   >Warning    </button>
    <button type="button" class="btn btn-info"      >Info       </button>
    <button type="button" class="btn btn-light"     >Light      </button>
    <button type="button" class="btn btn-dark"      >Dark       </button>
    <button type="button" class="btn btn-link"      >Link       </button>
    
    <div class="mb-4"></div><!-- MARGEN -->

    <!-- MUESTRA DE CODIGO EN PANTALLA -->
    <div class="code-sample">
    <pre></pre>
    <pre style="margin: 0; line-height: 125%">
    <span class="c-pink">&lt;button</span> <span class="c-green">type=</span><span class="c-beige">&quot;button&quot;</span> <span class="c-green">class=</span><span class="c-beige">&quot;btn btn-primary&quot;</span>   <span class="c-pink">&gt;</span><span style="color: #FFFFFF">Primary    </span><span class="c-pink">&lt;/button&gt;</span>
    <span class="c-pink">&lt;button</span> <span class="c-green">type=</span><span class="c-beige">&quot;button&quot;</span> <span class="c-green">class=</span><span class="c-beige">&quot;btn btn-secondary&quot;</span> <span class="c-pink">&gt;</span><span style="color: #FFFFFF">Secondary  </span><span class="c-pink">&lt;/button&gt;</span>
    <span class="c-pink">&lt;button</span> <span class="c-green">type=</span><span class="c-beige">&quot;button&quot;</span> <span class="c-green">class=</span><span class="c-beige">&quot;btn btn-success&quot;</span>   <span class="c-pink">&gt;</span><span style="color: #FFFFFF">Success    </span><span class="c-pink">&lt;/button&gt;</span>
    <span class="c-pink">&lt;button</span> <span class="c-green">type=</span><span class="c-beige">&quot;button&quot;</span> <span class="c-green">class=</span><span class="c-beige">&quot;btn btn-danger&quot;</span>    <span class="c-pink">&gt;</span><span style="color: #FFFFFF">Danger     </span><span class="c-pink">&lt;/button&gt;</span>
    <span class="c-pink">&lt;button</span> <span class="c-green">type=</span><span class="c-beige">&quot;button&quot;</span> <span class="c-green">class=</span><span class="c-beige">&quot;btn btn-warning&quot;</span>   <span class="c-pink">&gt;</span><span style="color: #FFFFFF">Warning    </span><span class="c-pink">&lt;/button&gt;</span>
    <span class="c-pink">&lt;button</span> <span class="c-green">type=</span><span class="c-beige">&quot;button&quot;</span> <span class="c-green">class=</span><span class="c-beige">&quot;btn btn-info&quot;</span>      <span class="c-pink">&gt;</span><span style="color: #FFFFFF">Info       </span><span class="c-pink">&lt;/button&gt;</span>
    <span class="c-pink">&lt;button</span> <span class="c-green">type=</span><span class="c-beige">&quot;button&quot;</span> <span class="c-green">class=</span><span class="c-beige">&quot;btn btn-light&quot;</span>     <span class="c-pink">&gt;</span><span style="color: #FFFFFF">Light      </span><span class="c-pink">&lt;/button&gt;</span>
    <span class="c-pink">&lt;button</span> <span class="c-green">type=</span><span class="c-beige">&quot;button&quot;</span> <span class="c-green">class=</span><span class="c-beige">&quot;btn btn-dark&quot;</span>      <span class="c-pink">&gt;</span><span style="color: #FFFFFF">Dark       </span><span class="c-pink">&lt;/button&gt;</span>
    <span class="c-pink">&lt;button</span> <span class="c-green">type=</span><span class="c-beige">&quot;button&quot;</span> <span class="c-green">class=</span><span class="c-beige">&quot;btn btn-link&quot;</span>      <span class="c-pink">&gt;</span><span style="color: #FFFFFF">Link       </span><span class="c-pink">&lt;/button&gt;</span>
    </pre>
    </div>

    <div class="mb-4"></div><!-- MARGEN -->

                                                            <h5 class="card-title">Rounded Buttons</h5>


    <button type="button" class="btn btn-primary rounded-pill"  >Primary    </button>
    <button type="button" class="btn btn-secondary rounded-pill">Secondary  </button>
    <button type="button" class="btn btn-success rounded-pill"  >Success    </button>
    <button type="button" class="btn btn-danger rounded-pill"   >Danger     </button>
    <button type="button" class="btn btn-warning rounded-pill"  >Warning    </button>
    <button type="button" class="btn btn-info rounded-pill"     >Info       </button>
    <button type="button" class="btn btn-light rounded-pill"    >Light      </button>
    <button type="button" class="btn btn-dark rounded-pill"     >Dark       </button>

    <div class="mb-4"></div><!-- MARGEN DEL FONDO -->

    <!-- MUESTRA DE CODIGO EN PANTALLA -->
    <div class="code-sample">
    <pre></pre>
    <pre style="margin: 0; line-height: 125%">
    <span class="c-pink">&lt;button</span> <span class="c-green">type=</span><span class="c-beige">&quot;button&quot;</span> <span class="c-green">class=</span><span class="c-beige">&quot;btn btn-primary rounded-pill&quot;</span>   <span class="c-pink">&gt;</span><span style="color: #FFFFFF">Primary    </span><span class="c-pink">&lt;/button&gt;</span>
    <span class="c-pink">&lt;button</span> <span class="c-green">type=</span><span class="c-beige">&quot;button&quot;</span> <span class="c-green">class=</span><span class="c-beige">&quot;btn btn-secondary rounded-pill&quot;</span> <span class="c-pink">&gt;</span><span style="color: #FFFFFF">Secondary  </span><span class="c-pink">&lt;/button&gt;</span>
    <span class="c-pink">&lt;button</span> <span class="c-green">type=</span><span class="c-beige">&quot;button&quot;</span> <span class="c-green">class=</span><span class="c-beige">&quot;btn btn-success rounded-pill&quot;</span>   <span class="c-pink">&gt;</span><span style="color: #FFFFFF">Success    </span><span class="c-pink">&lt;/button&gt;</span>
    <span class="c-pink">&lt;button</span> <span class="c-green">type=</span><span class="c-beige">&quot;button&quot;</span> <span class="c-green">class=</span><span class="c-beige">&quot;btn btn-danger rounded-pill&quot;</span>    <span class="c-pink">&gt;</span><span style="color: #FFFFFF">Danger     </span><span class="c-pink">&lt;/button&gt;</span>
    <span class="c-pink">&lt;button</span> <span class="c-green">type=</span><span class="c-beige">&quot;button&quot;</span> <span class="c-green">class=</span><span class="c-beige">&quot;btn btn-warning rounded-pill&quot;</span>   <span class="c-pink">&gt;</span><span style="color: #FFFFFF">Warning    </span><span class="c-pink">&lt;/button&gt;</span>
    <span class="c-pink">&lt;button</span> <span class="c-green">type=</span><span class="c-beige">&quot;button&quot;</span> <span class="c-green">class=</span><span class="c-beige">&quot;btn btn-info rounded-pill&quot;</span>      <span class="c-pink">&gt;</span><span style="color: #FFFFFF">Info       </span><span class="c-pink">&lt;/button&gt;</span>
    <span class="c-pink">&lt;button</span> <span class="c-green">type=</span><span class="c-beige">&quot;button&quot;</span> <span class="c-green">class=</span><span class="c-beige">&quot;btn btn-light rounded-pill&quot;</span>     <span class="c-pink">&gt;</span><span style="color: #FFFFFF">Light      </span><span class="c-pink">&lt;/button&gt;</span>
    <span class="c-pink">&lt;button</span> <span class="c-green">type=</span><span class="c-beige">&quot;button&quot;</span> <span class="c-green">class=</span><span class="c-beige">&quot;btn btn-dark rounded-pill&quot;</span>      <span class="c-pink">&gt;</span><span style="color: #FFFFFF">Dark       </span><span class="c-pink">&lt;/button&gt;</span>
    <span class="c-pink">&lt;button</span> <span class="c-green">type=</span><span class="c-beige">&quot;button&quot;</span> <span class="c-green">class=</span><span class="c-beige">&quot;btn btn-link rounded-pill&quot;</span>      <span class="c-pink">&gt;</span><span style="color: #FFFFFF">Link       </span><span class="c-pink">&lt;/button&gt;</span>
    </pre> <!-- LINEA EN BLANCO -->
    </div>

    <div class="mb-4"></div><!-- MARGEN DEL FONDO -->

                                                            <h5 class="card-title">Icon Buttons</h5>


    <button type="button" class="btn btn-primary">  <i class="bi bi-star me-1">             </i> With Text</button>
    <button type="button" class="btn btn-secondary"><i class="bi bi-collection">            </i></button>
    <button type="button" class="btn btn-success">  <i class="bi bi-check-circle">          </i></button>
    <button type="button" class="btn btn-danger">   <i class="bi bi-exclamation-octagon">   </i></button>
    <button type="button" class="btn btn-warning">  <i class="bi bi-exclamation-triangle">  </i></button>
    <button type="button" class="btn btn-info">     <i class="bi bi-info-circle">           </i></button>
    <button type="button" class="btn btn-dark">     <i class="bi bi-folder">                </i></button>

    <div class="mb-4"></div><!-- MARGEN DEL FONDO -->

    <!-- MUESTRA DE CODIGO EN PANTALLA -->
    <div class="code-sample">
    <pre></pre>
    <pre style="margin: 0; line-height: 125%">
    <span class="c-pink">&lt;button</span> <span class="c-green">type=</span><span class="c-beige">&quot;button&quot;</span> <span class="c-green">class=</span><span class="c-beige">&quot;btn btn-primary&quot;</span><span class="c-pink">&gt;</span>  <span class="c-pink">&lt;i</span> <span class="c-green">class=</span><span class="c-beige">&quot;bi bi-star me-1&quot;</span><span class="c-pink">&gt;</span>             <span class="c-pink">&lt;/i&gt;</span> With Text<span class="c-pink">&lt;/button&gt;</span>
    <span class="c-pink">&lt;button</span> <span class="c-green">type=</span><span class="c-beige">&quot;button&quot;</span> <span class="c-green">class=</span><span class="c-beige">&quot;btn btn-secondary&quot;</span><span class="c-pink">&gt;&lt;i</span> <span class="c-green">class=</span><span class="c-beige">&quot;bi bi-collection&quot;</span><span class="c-pink">&gt;</span>            <span class="c-pink">&lt;/i&gt;&lt;/button&gt;</span>
    <span class="c-pink">&lt;button</span> <span class="c-green">type=</span><span class="c-beige">&quot;button&quot;</span> <span class="c-green">class=</span><span class="c-beige">&quot;btn btn-success&quot;</span><span class="c-pink">&gt;</span>  <span class="c-pink">&lt;i</span> <span class="c-green">class=</span><span class="c-beige">&quot;bi bi-check-circle&quot;</span><span class="c-pink">&gt;</span>          <span class="c-pink">&lt;/i&gt;&lt;/button&gt;</span>
    <span class="c-pink">&lt;button</span> <span class="c-green">type=</span><span class="c-beige">&quot;button&quot;</span> <span class="c-green">class=</span><span class="c-beige">&quot;btn btn-danger&quot;</span><span class="c-pink">&gt;</span>   <span class="c-pink">&lt;i</span> <span class="c-green">class=</span><span class="c-beige">&quot;bi bi-exclamation-octagon&quot;</span><span class="c-pink">&gt;</span>   <span class="c-pink">&lt;/i&gt;&lt;/button&gt;</span>
    <span class="c-pink">&lt;button</span> <span class="c-green">type=</span><span class="c-beige">&quot;button&quot;</span> <span class="c-green">class=</span><span class="c-beige">&quot;btn btn-warning&quot;</span><span class="c-pink">&gt;</span>  <span class="c-pink">&lt;i</span> <span class="c-green">class=</span><span class="c-beige">&quot;bi bi-exclamation-triangle&quot;</span><span class="c-pink">&gt;</span>  <span class="c-pink">&lt;/i&gt;&lt;/button&gt;</span>
    <span class="c-pink">&lt;button</span> <span class="c-green">type=</span><span class="c-beige">&quot;button&quot;</span> <span class="c-green">class=</span><span class="c-beige">&quot;btn btn-info&quot;</span><span class="c-pink">&gt;</span>     <span class="c-pink">&lt;i</span> <span class="c-green">class=</span><span class="c-beige">&quot;bi bi-info-circle&quot;</span><span class="c-pink">&gt;</span>           <span class="c-pink">&lt;/i&gt;&lt;/button&gt;</span>
    <span class="c-pink">&lt;button</span> <span class="c-green">type=</span><span class="c-beige">&quot;button&quot;</span> <span class="c-green">class=</span><span class="c-beige">&quot;btn btn-dark&quot;</span><span class="c-pink">&gt;</span>     <span class="c-pink">&lt;i</span> <span class="c-green">class=</span><span class="c-beige">&quot;bi bi-folder&quot;</span><span class="c-pink">&gt;</span>                <span class="c-pink">&lt;/i&gt;&lt;/button&gt;</span>
    </pre></div>

    <div class="mb-4"></div><!-- MARGEN DEL FONDO -->

    <h5 class="card-title">Button Groups</h5>

    <div class="btn-group" role="group" aria-label="Basic example">
        <button type="button" class="btn btn-primary">Left</button>
        <button type="button" class="btn btn-primary">Middle</button>
        <button type="button" class="btn btn-primary">Right</button>
    </div>

    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
        <button type="button" class="btn btn-danger">Left</button>
        <button type="button" class="btn btn-warning">Middle</button>
        <button type="button" class="btn btn-success">Right</button>
    </div>

    <div class="btn-group" role="group" aria-label="Basic outlined example">
        <button type="button" class="btn btn-outline-primary">Left</button>
        <button type="button" class="btn btn-outline-primary">Middle</button>
        <button type="button" class="btn btn-outline-primary">Right</button>
    </div>

    <h5 class="card-title">Button Sizes</h5>

    <button type="button" class="btn btn-primary btn-sm">Small</button>
    <button type="button" class="btn btn-secondary">Normal</button>
    <button type="button" class="btn btn-success btn-lg">Large</button>

    <button type="button" class="btn btn-outline-danger btn-sm">Small</button>
    <button type="button" class="btn btn-outline-warning">Normal</button>
    <button type="button" class="btn btn-outline-info btn-lg">Large</button>

    <div class="d-grid gap-2 mt-3">
        <button class="btn btn-primary" type="button">Block Button</button>
    </div>

    <h5 class="card-title">Outline Buttons</h5>

    <button type="button" class="btn btn-outline-primary">Primary</button>
    <button type="button" class="btn btn-outline-secondary">Secondary</button>
    <button type="button" class="btn btn-outline-success">Success</button>
    <button type="button" class="btn btn-outline-danger">Danger</button>
    <button type="button" class="btn btn-outline-warning">Warning</button>
    <button type="button" class="btn btn-outline-info">Info</button>
    <button type="button" class="btn btn-outline-light">Light</button>
    <button type="button" class="btn btn-outline-dark">Dark</button>
    
    <h5 class="card-title">Button States</h5>

    <button type="button" class="btn btn-primary">Normal</button>
    <button type="button" class="btn btn-primary" disabled>Disabled</button>
    <button type="button" class="btn btn-outline-primary">Normal</button>
    <button type="button" class="btn btn-outline-primary" disabled>Disabled</button>
@endsection