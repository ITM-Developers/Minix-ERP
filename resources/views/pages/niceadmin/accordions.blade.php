@extends('layouts.themes.NiceAdmin.app')

@section('page-title','Accordions')

@section('content')
    <p class="instrucciones">
        Los <span class="fw-bold">accordions</span> son elementos colapsables que sirven para mostrar informacion resumida
        y evitar abrumar al usaurio con demasiado contenido a la vez. Si deseas conocer mas informacion sobre estos elementos
        visita la documentacion oficial de 
        <a href="https://getbootstrap.com/docs/5.0/components/accordion/" target="_blank">Bootstrap 5</a>. 
    </p>

    <h5 class="card-title">Default Accordion</h5>
    
    <div class="code-sample mb-4">
    <pre>
    <span></span>
    <span class="c-pink">&#64;php</span>
    <span >$table</span> <span class="c-pink">=</span> <span >[</span>
        <span >[</span>
            <span class="c-beige">&quot;title&quot;</span> <span class="c-pink">=&gt;</span> <span class="c-beige">&quot;Accordion Item #1&quot;</span><span >,</span>
            <span class="c-beige">&quot;DomID&quot;</span> <span class="c-pink">=&gt;</span> <span class="c-beige">&quot;AKSJCNAK&quot;</span><span >,</span>
            <span class="c-beige">&quot;body&quot;</span>  <span class="c-pink">=&gt;</span> <span class="c-beige">&quot;&lt;strong&gt;This is the first item&#39;s accordion body.&lt;/strong&gt; It is hidden by</span>
            <span class="c-beige">                default, until the collapse plugin adds the appropriate classes that we use</span>
            <span class="c-beige">                to style each element. These classes control the overall appearance, as well</span>
            <span class="c-beige">                as the showing and hiding via CSS transitions. You can modify any of this</span>
            <span class="c-beige">                with custom CSS or overriding our default variables. It&#39;s also worth noting</span>
            <span class="c-beige">                that just about any HTML can go within the &lt;code&gt;.accordion-body&lt;/code&gt;,</span>
            <span class="c-beige">                though the transition does limit overflow.&quot;</span>
        <span >],</span>
        <span >[</span>
            <span class="c-beige">&quot;title&quot;</span> <span class="c-pink">=&gt;</span> <span class="c-beige">&quot;Accordion Item #2&quot;</span><span >,</span>
            <span class="c-beige">&quot;DomID&quot;</span> <span class="c-pink">=&gt;</span> <span class="c-beige">&quot;ALKSALKSMCAL&quot;</span><span >,</span>
            <span class="c-beige">&quot;body&quot;</span>  <span class="c-pink">=&gt;</span> <span class="c-beige">&quot;&lt;strong&gt;This is the second item&#39;s accordion body.&lt;/strong&gt; It is hidden by</span>
            <span class="c-beige">                default, until the collapse plugin adds the appropriate classes that we use</span>
            <span class="c-beige">                to style each element. These classes control the overall appearance, as well</span>
            <span class="c-beige">                as the showing and hiding via CSS transitions. You can modify any of this</span>
            <span class="c-beige">                with custom CSS or overriding our default variables. It&#39;s also worth noting</span>
            <span class="c-beige">                that just about any HTML can go within the &lt;code&gt;.accordion-body&lt;/code&gt;,</span>
            <span class="c-beige">                though the transition does limit overflow.&quot;</span>
        <span >]</span>
    <span >];</span> 
    <span class="c-pink">&#64;endphp</span></pre>
    </div>

    @php
        $table = [
            [
                "title" => "Accordion Item #1",
                "DomID" => "AKSJCNAK",
                "body"  => "<strong>This is the first item's accordion body.</strong> It is hidden by
                default, until the collapse plugin adds the appropriate classes that we use
                to style each element. These classes control the overall appearance, as well
                as the showing and hiding via CSS transitions. You can modify any of this
                with custom CSS or overriding our default variables. It's also worth noting
                that just about any HTML can go within the <code>.accordion-body</code>,
                though the transition does limit overflow."
            ],
            [
                "title" => "Accordion Item #2",
                "DomID" => "ALKSALKSMCAL",
                "body"  => "<strong>This is the second item's accordion body.</strong> It is hidden by
                default, until the collapse plugin adds the appropriate classes that we use
                to style each element. These classes control the overall appearance, as well
                as the showing and hiding via CSS transitions. You can modify any of this
                with custom CSS or overriding our default variables. It's also worth noting
                that just about any HTML can go within the <code>.accordion-body</code>,
                though the transition does limit overflow."
            ]
        ]; 
    @endphp

    <div class="code-sample mb-4">
    <pre>
    <span></span>
    <span class="c-pink">&lt;x-nice-admin-accordion</span> <span style="color: #a6e22e">:table=</span><span class="c-beige">&quot;$table&quot;</span><span class="c-pink">/&gt;</span></pre>
    </div>
    
    <x-nice-admin-accordion :table="$table"/>

@endsection