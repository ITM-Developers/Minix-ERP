@extends('layouts.themes.NiceAdmin.app')

@section('page-title','Badges')

@section('content')
    <p class="instrucciones">
        Las <span class="fw-bold">badges</span> son elementos que se muestran a continuacion, estos no pertenecen al tema de NiceAdmin
        ya que estan disponibles en las clases de bootstrap sin embargo considero apropiado agregarlos para su uso. Si deseas leer mas
        informacion al respecto visita el siguiente enlace con la documentacion oficial de 
        <a href="https://getbootstrap.com/docs/5.0/components/badge/" target="_blank">Bootstrap 5</a>. 
    </p>

    <h5 class="card-title">Default Badges</h5>
    
    <div class="code-sample mb-4">
    <pre> 
    <span class="c-pink">&lt;span</span> <span class="c-green">class=</span><span class="c-beige">&quot;badge bg-primary&quot;</span><span class="c-pink">&gt;</span><span class="c-white">Primary</span><span class="c-pink">&lt;/span&gt;</span>
    <span class="c-pink">&lt;span</span> <span class="c-green">class=</span><span class="c-beige">&quot;badge bg-secondary&quot;</span><span class="c-pink">&gt;</span><span class="c-white">Secondary</span><span class="c-pink">&lt;/span&gt;</span>
    <span class="c-pink">&lt;span</span> <span class="c-green">class=</span><span class="c-beige">&quot;badge bg-success&quot;</span><span class="c-pink">&gt;</span><span class="c-white">Success</span><span class="c-pink">&lt;/span&gt;</span>
    <span class="c-pink">&lt;span</span> <span class="c-green">class=</span><span class="c-beige">&quot;badge bg-danger&quot;</span><span class="c-pink">&gt;</span><span class="c-white">Danger</span><span class="c-pink">&lt;/span&gt;</span>
    <span class="c-pink">&lt;span</span> <span class="c-green">class=</span><span class="c-beige">&quot;badge bg-warning text-dark&quot;</span><span class="c-pink">&gt;</span><span class="c-white">Warning</span><span class="c-pink">&lt;/span&gt;</span>
    <span class="c-pink">&lt;span</span> <span class="c-green">class=</span><span class="c-beige">&quot;badge bg-info text-dark&quot;</span><span class="c-pink">&gt;</span><span class="c-white">Info</span><span class="c-pink">&lt;/span&gt;</span>
    <span class="c-pink">&lt;span</span> <span class="c-green">class=</span><span class="c-beige">&quot;badge bg-light text-dark&quot;</span><span class="c-pink">&gt;</span><span class="c-white">Light</span><span class="c-pink">&lt;/span&gt;</span>
    <span class="c-pink">&lt;span</span> <span class="c-green">class=</span><span class="c-beige">&quot;badge bg-dark&quot;</span><span class="c-pink">&gt;</span><span class="c-white">Dark</span><span class="c-pink">&lt;/span&gt;</span></pre>
    </div>

    <div class="d-flex justify-content-center">
        <span class="badge bg-primary mx-2">Primary</span>
        <span class="badge bg-secondary mx-2">Secondary</span>
        <span class="badge bg-success mx-2">Success</span>
        <span class="badge bg-danger mx-2">Danger</span>
        <span class="badge bg-warning text-dark mx-2">Warning</span>
        <span class="badge bg-info text-dark mx-2">Info</span>
        <span class="badge bg-light text-dark mx-2">Light</span>
        <span class="badge bg-dark mx-2">Dark</span>
    </div>

    <h5 class="card-title">Pill Badges</h5>

    <div class="code-sample mb-4">
    <pre> 
    <span class="c-pink">&lt;span</span> <span class="c-green">class=</span><span class="c-beige">&quot;badge rounded-pill bg-primary&quot;</span><span class="c-pink">&gt;</span><span class="c-white">Primary</span><span class="c-pink">&lt;/span&gt;</span>
    <span class="c-pink">&lt;span</span> <span class="c-green">class=</span><span class="c-beige">&quot;badge rounded-pill bg-secondary&quot;</span><span class="c-pink">&gt;</span><span class="c-white">Secondary</span><span class="c-pink">&lt;/span&gt;</span>
    <span class="c-pink">&lt;span</span> <span class="c-green">class=</span><span class="c-beige">&quot;badge rounded-pill bg-success&quot;</span><span class="c-pink">&gt;</span><span class="c-white">Success</span><span class="c-pink">&lt;/span&gt;</span>
    <span class="c-pink">&lt;span</span> <span class="c-green">class=</span><span class="c-beige">&quot;badge rounded-pill bg-danger&quot;</span><span class="c-pink">&gt;</span><span class="c-white">Danger</span><span class="c-pink">&lt;/span&gt;</span>
    <span class="c-pink">&lt;span</span> <span class="c-green">class=</span><span class="c-beige">&quot;badge rounded-pill bg-warning text-dark&quot;</span><span class="c-pink">&gt;</span><span class="c-white">Warning</span><span class="c-pink">&lt;/span&gt;</span>
    <span class="c-pink">&lt;span</span> <span class="c-green">class=</span><span class="c-beige">&quot;badge rounded-pill bg-info text-dark&quot;</span><span class="c-pink">&gt;</span><span class="c-white">Info</span><span class="c-pink">&lt;/span&gt;</span>
    <span class="c-pink">&lt;span</span> <span class="c-green">class=</span><span class="c-beige">&quot;badge rounded-pill bg-light text-dark&quot;</span><span class="c-pink">&gt;</span><span class="c-white">Light</span><span class="c-pink">&lt;/span&gt;</span>
    <span class="c-pink">&lt;span</span> <span class="c-green">class=</span><span class="c-beige">&quot;badge rounded-pill bg-dark&quot;</span><span class="c-pink">&gt;</span><span class="c-white">Dark</span><span class="c-pink">&lt;/span&gt;</span></pre>
    </div>

    <div class="d-flex justify-content-center">
        <span class="badge rounded-pill bg-primary mx-2">Primary</span>
        <span class="badge rounded-pill bg-secondary mx-2">Secondary</span>
        <span class="badge rounded-pill bg-success mx-2">Success</span>
        <span class="badge rounded-pill bg-danger mx-2">Danger</span>
        <span class="badge rounded-pill bg-warning text-dark mx-2">Warning</span>
        <span class="badge rounded-pill bg-info text-dark mx-2">Info</span>
        <span class="badge rounded-pill bg-light text-dark mx-2">Light</span>
        <span class="badge rounded-pill bg-dark mx-2">Dark</span>
    </div>

    <h5 class="card-title">Button Badges</h5>

    <div class="code-sample mb-4">
    <pre>
    <span></span>
    <span class="c-pink">&lt;button</span> <span class="c-green">type=</span><span class="c-beige">&quot;button&quot;</span> <span class="c-green">class=</span><span class="c-beige">&quot;btn btn-primary m-2&quot;</span><span class="c-pink">&gt;</span>
        <span class="c-white">Primary </span><span class="c-pink">&lt;span</span> <span class="c-green">class=</span><span class="c-beige">&quot;badge bg-white text-primary&quot;</span><span class="c-pink">&gt;</span>4<span class="c-pink">&lt;/span&gt;</span>
    <span class="c-pink">&lt;/button&gt;</span>
    <span class="c-pink">&lt;button</span> <span class="c-green">type=</span><span class="c-beige">&quot;button&quot;</span> <span class="c-green">class=</span><span class="c-beige">&quot;btn btn-secondary m-2&quot;</span><span class="c-pink">&gt;</span>
        <span class="c-white">Secondary </span><span class="c-pink">&lt;span</span> <span class="c-green">class=</span><span class="c-beige">&quot;badge bg-white text-secondary&quot;</span><span class="c-pink">&gt;</span>4<span class="c-pink">&lt;/span&gt;</span>
    <span class="c-pink">&lt;/button&gt;</span>
    <span class="c-pink">&lt;button</span> <span class="c-green">type=</span><span class="c-beige">&quot;button&quot;</span> <span class="c-green">class=</span><span class="c-beige">&quot;btn btn-success m-2&quot;</span><span class="c-pink">&gt;</span>
        <span class="c-white">Success </span><span class="c-pink">&lt;span</span> <span class="c-green">class=</span><span class="c-beige">&quot;badge bg-white text-success&quot;</span><span class="c-pink">&gt;</span>4<span class="c-pink">&lt;/span&gt;</span>
    <span class="c-pink">&lt;/button&gt;</span>
    <span class="c-pink">&lt;button</span> <span class="c-green">type=</span><span class="c-beige">&quot;button&quot;</span> <span class="c-green">class=</span><span class="c-beige">&quot;btn btn-danger m-2&quot;</span><span class="c-pink">&gt;</span>
        <span class="c-white">DAnger </span><span class="c-pink">&lt;span</span> <span class="c-green">class=</span><span class="c-beige">&quot;badge bg-white text-danger&quot;</span><span class="c-pink">&gt;</span>4<span class="c-pink">&lt;/span&gt;</span>
    <span class="c-pink">&lt;/button&gt;</span>
    <span class="c-pink">&lt;button</span> <span class="c-green">type=</span><span class="c-beige">&quot;button&quot;</span> <span class="c-green">class=</span><span class="c-beige">&quot;btn btn-warning m-2&quot;</span><span class="c-pink">&gt;</span>
        <span class="c-white">Warning </span> <span class="c-pink">&lt;span</span> <span class="c-green">class=</span><span class="c-beige">&quot;badge bg-white text-warning&quot;</span><span class="c-pink">&gt;</span>4<span class="c-pink">&lt;/span&gt;</span>
    <span class="c-pink">&lt;/button&gt;</span>
    <span class="c-pink">&lt;button</span> <span class="c-green">type=</span><span class="c-beige">&quot;button&quot;</span> <span class="c-green">class=</span><span class="c-beige">&quot;btn btn-info m-2&quot;</span><span class="c-pink">&gt;</span>
        <span class="c-white">Info </span> <span class="c-pink">&lt;span</span> <span class="c-green">class=</span><span class="c-beige">&quot;badge bg-white text-info&quot;</span><span class="c-pink">&gt;</span>4<span class="c-pink">&lt;/span&gt;</span>
    <span class="c-pink">&lt;/button&gt;</span>
    <span class="c-pink">&lt;button</span> <span class="c-green">type=</span><span class="c-beige">&quot;button&quot;</span> <span class="c-green">class=</span><span class="c-beige">&quot;btn btn-light m-2&quot;</span><span class="c-pink">&gt;</span>
        <span class="c-white">Light </span> <span class="c-pink">&lt;span</span> <span class="c-green">class=</span><span class="c-beige">&quot;badge bg-secondary text-light&quot;</span><span class="c-pink">&gt;</span>4<span class="c-pink">&lt;/span&gt;</span>
    <span class="c-pink">&lt;/button&gt;</span>
    <span class="c-pink">&lt;button</span> <span class="c-green">type=</span><span class="c-beige">&quot;button&quot;</span> <span class="c-green">class=</span><span class="c-beige">&quot;btn btn-dark m-2&quot;</span><span class="c-pink">&gt;</span>
        <span class="c-white">Dark </span> <span class="c-pink">&lt;span</span> <span class="c-green">class=</span><span class="c-beige">&quot;badge bg-white text-dark&quot;</span><span class="c-pink">&gt;</span>4<span class="c-pink">&lt;/span&gt;</span>
    <span class="c-pink">&lt;/button&gt;</span></pre></div>


    <div class="d-flex justify-content-center">
        <button type="button" class="btn btn-primary m-2">
            Primary <span class="badge bg-white text-primary">4</span>
        </button>
        <button type="button" class="btn btn-secondary m-2">
            Secondary <span class="badge bg-white text-secondary">4</span>
        </button>
        <button type="button" class="btn btn-success m-2">
            Success <span class="badge bg-white text-success">4</span>
        </button>
        <button type="button" class="btn btn-danger m-2">
            Danger <span class="badge bg-white text-danger">4</span>
        </button>
        <button type="button" class="btn btn-warning m-2">
            Warning <span class="badge bg-white text-warning">4</span>
        </button>
        <button type="button" class="btn btn-info m-2">
            Info <span class="badge bg-white text-info">4</span>
        </button>
        <button type="button" class="btn btn-light m-2">
            Light <span class="badge bg-secondary text-light">4</span>
        </button>
        <button type="button" class="btn btn-dark m-2">
            Dark <span class="badge bg-white text-dark">4</span>
        </button>
    </div>

    <h5 class="card-title">Icon Badges</h5>

    <div class="code-sample mb-4">
    <pre>
    <span></span>
    <span class="c-pink">&lt;span</span> <span class="c-green">class=</span><span class="c-beige">&quot;badge bg-primary&quot;</span><span class="c-pink">&gt;&lt;i</span> <span class="c-green">class=</span><span class="c-beige">&quot;bi bi-star me-1&quot;</span><span class="c-pink">&gt;&lt;/i&gt;</span><span class="c-white"> Primary</span> <span class="c-pink">&lt;/span&gt;</span>
    <span class="c-pink">&lt;span</span> <span class="c-green">class=</span><span class="c-beige">&quot;badge bg-secondary&quot;</span><span class="c-pink">&gt;&lt;i</span> <span class="c-green">class=</span><span class="c-beige">&quot;bi bi-collection me-1&quot;</span><span class="c-pink">&gt;&lt;/i&gt;</span><span class="c-white"> Secondary</span> <span class="c-pink">&lt;/span&gt;</span>
    <span class="c-pink">&lt;span</span> <span class="c-green">class=</span><span class="c-beige">&quot;badge bg-success&quot;</span><span class="c-pink">&gt;&lt;i</span> <span class="c-green">class=</span><span class="c-beige">&quot;bi bi-check-circle me-1&quot;</span><span class="c-pink">&gt;&lt;/i&gt;</span><span class="c-white"> Success</span> <span class="c-pink">&lt;/span&gt;</span>
    <span class="c-pink">&lt;span</span> <span class="c-green">class=</span><span class="c-beige">&quot;badge bg-danger&quot;</span><span class="c-pink">&gt;&lt;i</span> <span class="c-green">class=</span><span class="c-beige">&quot;bi bi-exclamation-octagon me-1&quot;</span><span class="c-pink">&gt;&lt;/i&gt;</span> <span class="c-white">Danger</span> <span class="c-pink">&lt;/span&gt;</span>
    <span class="c-pink">&lt;span</span> <span class="c-green">class=</span><span class="c-beige">&quot;badge bg-warning text-dark&quot;</span><span class="c-pink">&gt;&lt;i</span> <span class="c-green">class=</span><span class="c-beige">&quot;bi bi-exclamation-triangle me-1&quot;</span><span class="c-pink">&gt;&lt;/i&gt;</span><span class="c-white"> Warning</span> <span class="c-pink">&lt;/span&gt;</span>
    <span class="c-pink">&lt;span</span> <span class="c-green">class=</span><span class="c-beige">&quot;badge bg-info text-dark&quot;</span><span class="c-pink">&gt;&lt;i</span> <span class="c-green">class=</span><span class="c-beige">&quot;bi bi-info-circle me-1&quot;</span><span class="c-pink">&gt;&lt;/i&gt;</span> <span class="c-white">Info</span> <span class="c-pink">&lt;/span&gt;</span>
    <span class="c-pink">&lt;span</span> <span class="c-green">class=</span><span class="c-beige">&quot;badge bg-light text-dark&quot;</span><span class="c-pink">&gt;&lt;i</span> <span class="c-green">class=</span><span class="c-beige">&quot;bi bi-star me-1&quot;</span><span class="c-pink">&gt;&lt;/i&gt;</span> <span class="c-white">Light</span> <span class="c-pink">&lt;/span&gt;</span>
    <span class="c-pink">&lt;span</span> <span class="c-green">class=</span><span class="c-beige">&quot;badge bg-dark&quot;</span><span class="c-pink">&gt;&lt;i</span> <span class="c-green">class=</span><span class="c-beige">&quot;bi bi-folder me-1&quot;</span><span class="c-pink">&gt;&lt;/i&gt;</span> <span class="c-white">Dark</span> <span class="c-pink">&lt;/span&gt;</span></pre>
    </div>

    <div class="d-flex justify-content-center">
        <span class="badge bg-primary mx-2"><i class="bi bi-star me-1"></i> Primary</span>
        <span class="badge bg-secondary mx-2"><i class="bi bi-collection me-1"></i> Secondary</span>
        <span class="badge bg-success mx-2"><i class="bi bi-check-circle me-1"></i> Success</span>
        <span class="badge bg-danger mx-2"><i class="bi bi-exclamation-octagon me-1"></i> Danger</span>
        <span class="badge bg-warning text-dark mx-2"><i class="bi bi-exclamation-triangle me-1"></i>Warning</span>
        <span class="badge bg-info text-dark mx-2"><i class="bi bi-info-circle me-1"></i> Info</span>
        <span class="badge bg-light text-dark mx-2"><i class="bi bi-star me-1"></i> Light</span>
        <span class="badge bg-dark mx-2"><i class="bi bi-folder me-1"></i> Dark</span>
    </div>

@endsection