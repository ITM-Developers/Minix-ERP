@extends('layouts.themes.NiceAdmin.app')

@section('breadcrumb')
    @php
    $links = ["Components","Accordions"];
    @endphp
    <x-niceadmin.breadcrumb :links="$links" title="Accordions" />
@endsection

@section('page-title','Demo of NiceAdmin Accordions')

@section('content')
    <p class="instrucciones">
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio vitae, voluptatibus nobis officia voluptatem sunt tempore tenetur velit ad, commodi numquam quae repudiandae ipsum! Laudantium illum fugiat distinctio dolor. Reiciendis!
        Rem cumque a fugiat perspiciatis nesciunt, ipsam eos numquam reprehenderit quam praesentium necessitatibus iusto possimus facere consectetur atque minima in dolor recusandae, cupiditate at illo provident! Voluptatum corporis commodi sunt.
        Repudiandae eaque natus atque ex ab porro molestiae culpa iure odit quos. Porro, praesentium labore animi quibusdam nobis delectus commodi doloremque blanditiis laboriosam obcaecati nisi id incidunt ipsum sit laudantium.
    </p>

    <!-- HTML generated using hilite.me -->
    <div style="background: #272822; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;">
    <pre></pre>
    <pre style="margin: 0; line-height: 125%">    <span style="color: #f92672">&#64;php</span>
    <span style="color: #f8f8f2">$table</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">[</span>
        <span style="color: #f8f8f2">[</span>
            <span style="color: #e6db74">&quot;title&quot;</span> <span style="color: #f92672">=&gt;</span> <span style="color: #e6db74">&quot;Accordion Item #1&quot;</span><span style="color: #f8f8f2">,</span>
            <span style="color: #e6db74">&quot;DomID&quot;</span> <span style="color: #f92672">=&gt;</span> <span style="color: #e6db74">&quot;AKSJCNAK&quot;</span><span style="color: #f8f8f2">,</span>
            <span style="color: #e6db74">&quot;body&quot;</span>  <span style="color: #f92672">=&gt;</span> <span style="color: #e6db74">&quot;&lt;strong&gt;This is the first item&#39;s accordion body.&lt;/strong&gt; It is hidden by</span>
            <span style="color: #e6db74">                default, until the collapse plugin adds the appropriate classes that we use</span>
            <span style="color: #e6db74">                to style each element. These classes control the overall appearance, as well</span>
            <span style="color: #e6db74">                as the showing and hiding via CSS transitions. You can modify any of this</span>
            <span style="color: #e6db74">                with custom CSS or overriding our default variables. It&#39;s also worth noting</span>
            <span style="color: #e6db74">                that just about any HTML can go within the &lt;code&gt;.accordion-body&lt;/code&gt;,</span>
            <span style="color: #e6db74">                though the transition does limit overflow.&quot;</span>
        <span style="color: #f8f8f2">],</span>
        <span style="color: #f8f8f2">[</span>
            <span style="color: #e6db74">&quot;title&quot;</span> <span style="color: #f92672">=&gt;</span> <span style="color: #e6db74">&quot;Accordion Item #2&quot;</span><span style="color: #f8f8f2">,</span>
            <span style="color: #e6db74">&quot;DomID&quot;</span> <span style="color: #f92672">=&gt;</span> <span style="color: #e6db74">&quot;ALKSALKSMCAL&quot;</span><span style="color: #f8f8f2">,</span>
            <span style="color: #e6db74">&quot;body&quot;</span>  <span style="color: #f92672">=&gt;</span> <span style="color: #e6db74">&quot;&lt;strong&gt;This is the second item&#39;s accordion body.&lt;/strong&gt; It is hidden by</span>
            <span style="color: #e6db74">                default, until the collapse plugin adds the appropriate classes that we use</span>
            <span style="color: #e6db74">                to style each element. These classes control the overall appearance, as well</span>
            <span style="color: #e6db74">                as the showing and hiding via CSS transitions. You can modify any of this</span>
            <span style="color: #e6db74">                with custom CSS or overriding our default variables. It&#39;s also worth noting</span>
            <span style="color: #e6db74">                that just about any HTML can go within the &lt;code&gt;.accordion-body&lt;/code&gt;,</span>
            <span style="color: #e6db74">                though the transition does limit overflow.&quot;</span>
        <span style="color: #f8f8f2">]</span>
    <span style="color: #f8f8f2">];</span> 
    <span style="color: #f92672">&#64;endphp</span>
    </pre></div>


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

    <h5 class="card-title">Default Accordion</h5>

    <!-- HTML generated using hilite.me -->
    <div style="background: #272822; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;">
    <pre></pre>
    <pre style="margin: 0; line-height: 125%">    <span style="color: #f92672">&lt;x-nice-admin-accordion</span> <span style="color: #a6e22e">:table=</span><span style="color: #e6db74">&quot;$table&quot;</span><span style="color: #f92672">/&gt;</span>
    </pre></div><div class="mb-4"></div>
    
    <x-nice-admin-accordion :table="$table"/>

@endsection