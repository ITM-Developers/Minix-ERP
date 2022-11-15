@extends('layouts.themes.NiceAdmin.app')

@section('breadcrumb')
    @php
    $links = ["Components","Alerts"];
    @endphp
    <x-niceadmin.breadcrumb :links="$links" title="Alerts" />
@endsection

@section('page-title','Demo of NiceAdmin Alerts')

@section('content')
    <p class="instrucciones">
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio vitae, voluptatibus nobis officia voluptatem sunt tempore tenetur velit ad, commodi numquam quae repudiandae ipsum! Laudantium illum fugiat distinctio dolor. Reiciendis!
        Rem cumque a fugiat perspiciatis nesciunt, ipsam eos numquam reprehenderit quam praesentium necessitatibus iusto possimus facere consectetur atque minima in dolor recusandae, cupiditate at illo provident! Voluptatum corporis commodi sunt.
        Repudiandae eaque natus atque ex ab porro molestiae culpa iure odit quos. Porro, praesentium labore animi quibusdam nobis delectus commodi doloremque blanditiis laboriosam obcaecati nisi id incidunt ipsum sit laudantium.
    </p>

    @php
        $message = "A simple alert—check it out!";
    @endphp

    <h5 class="card-title">Default Alerts</h5>

    <!-- HTML generated using hilite.me -->
    <div style="background: #272822; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;">
    <pre></pre>
    <pre style="margin: 0; line-height: 125%">    <span style="color: #f92672">&lt;x</span><span style="color: #a6e22e">-niceadmin</span><span style="color: #960050; background-color: #1e0010">.</span><span style="color: #a6e22e">alert</span> <span style="color: #a6e22e">type=</span><span style="color: #e6db74">&quot;primary&quot;</span>   <span style="color: #a6e22e">:message=</span><span style="color: #e6db74">&quot;$message&quot;</span><span style="color: #f92672">/&gt;</span>
    <span style="color: #f92672">&lt;x</span><span style="color: #a6e22e">-niceadmin</span><span style="color: #960050; background-color: #1e0010">.</span><span style="color: #a6e22e">alert</span> <span style="color: #a6e22e">type=</span><span style="color: #e6db74">&quot;secondary&quot;</span> <span style="color: #a6e22e">:message=</span><span style="color: #e6db74">&quot;$message&quot;</span><span style="color: #f92672">/&gt;</span>
    <span style="color: #f92672">&lt;x</span><span style="color: #a6e22e">-niceadmin</span><span style="color: #960050; background-color: #1e0010">.</span><span style="color: #a6e22e">alert</span> <span style="color: #a6e22e">type=</span><span style="color: #e6db74">&quot;success&quot;</span>   <span style="color: #a6e22e">:message=</span><span style="color: #e6db74">&quot;$message&quot;</span><span style="color: #f92672">/&gt;</span>
    <span style="color: #f92672">&lt;x</span><span style="color: #a6e22e">-niceadmin</span><span style="color: #960050; background-color: #1e0010">.</span><span style="color: #a6e22e">alert</span> <span style="color: #a6e22e">type=</span><span style="color: #e6db74">&quot;danger&quot;</span>    <span style="color: #a6e22e">:message=</span><span style="color: #e6db74">&quot;$message&quot;</span><span style="color: #f92672">/&gt;</span>
    <span style="color: #f92672">&lt;x</span><span style="color: #a6e22e">-niceadmin</span><span style="color: #960050; background-color: #1e0010">.</span><span style="color: #a6e22e">alert</span> <span style="color: #a6e22e">type=</span><span style="color: #e6db74">&quot;warning&quot;</span>   <span style="color: #a6e22e">:message=</span><span style="color: #e6db74">&quot;$message&quot;</span><span style="color: #f92672">/&gt;</span>
    <span style="color: #f92672">&lt;x</span><span style="color: #a6e22e">-niceadmin</span><span style="color: #960050; background-color: #1e0010">.</span><span style="color: #a6e22e">alert</span> <span style="color: #a6e22e">type=</span><span style="color: #e6db74">&quot;info&quot;</span>      <span style="color: #a6e22e">:message=</span><span style="color: #e6db74">&quot;$message&quot;</span><span style="color: #f92672">/&gt;</span>
    <span style="color: #f92672">&lt;x</span><span style="color: #a6e22e">-niceadmin</span><span style="color: #960050; background-color: #1e0010">.</span><span style="color: #a6e22e">alert</span> <span style="color: #a6e22e">type=</span><span style="color: #e6db74">&quot;light&quot;</span>     <span style="color: #a6e22e">:message=</span><span style="color: #e6db74">&quot;$message&quot;</span><span style="color: #f92672">/&gt;</span>
    <span style="color: #f92672">&lt;x</span><span style="color: #a6e22e">-niceadmin</span><span style="color: #960050; background-color: #1e0010">.</span><span style="color: #a6e22e">alert</span> <span style="color: #a6e22e">type=</span><span style="color: #e6db74">&quot;dark&quot;</span>      <span style="color: #a6e22e">:message=</span><span style="color: #e6db74">&quot;$message&quot;</span><span style="color: #f92672">/&gt;</span>
    </pre></div><div class="mb-3"></div>

    <x-niceadmin.alert type="primary"   :message="$message"/>
    <x-niceadmin.alert type="secondary" :message="$message"/>
    <x-niceadmin.alert type="success"   :message="$message"/>
    <x-niceadmin.alert type="danger"    :message="$message"/>
    <x-niceadmin.alert type="warning"   :message="$message"/>
    <x-niceadmin.alert type="info"      :message="$message"/>
    <x-niceadmin.alert type="light"     :message="$message"/>
    <x-niceadmin.alert type="dark"      :message="$message"/>


    <h5 class="card-title">With Icons</h5>
    
    <!-- HTML generated using hilite.me -->
    <div style="background: #272822; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;">
    <pre></pre>
    <pre style="margin: 0; line-height: 125%">    <span style="color: #f92672">&lt;x</span><span style="color: #a6e22e">-niceadmin</span><span style="color: #960050; background-color: #1e0010">.</span><span style="color: #a6e22e">alert-icon</span> <span style="color: #a6e22e">type=</span><span style="color: #e6db74">&quot;primary&quot;</span>      <span style="color: #a6e22e">icon=</span><span style="color: #e6db74">&quot;bi-star&quot;</span>                  <span style="color: #a6e22e">:message=</span><span style="color: #e6db74">&quot;$message&quot;</span><span style="color: #f92672">/&gt;</span>
    <span style="color: #f92672">&lt;x</span><span style="color: #a6e22e">-niceadmin</span><span style="color: #960050; background-color: #1e0010">.</span><span style="color: #a6e22e">alert-icon</span> <span style="color: #a6e22e">type=</span><span style="color: #e6db74">&quot;secondary&quot;</span>    <span style="color: #a6e22e">icon=</span><span style="color: #e6db74">&quot;bi-collection&quot;</span>            <span style="color: #a6e22e">:message=</span><span style="color: #e6db74">&quot;$message&quot;</span><span style="color: #f92672">/&gt;</span>
    <span style="color: #f92672">&lt;x</span><span style="color: #a6e22e">-niceadmin</span><span style="color: #960050; background-color: #1e0010">.</span><span style="color: #a6e22e">alert-icon</span> <span style="color: #a6e22e">type=</span><span style="color: #e6db74">&quot;success&quot;</span>      <span style="color: #a6e22e">icon=</span><span style="color: #e6db74">&quot;bi-check-circle&quot;</span>          <span style="color: #a6e22e">:message=</span><span style="color: #e6db74">&quot;$message&quot;</span><span style="color: #f92672">/&gt;</span>
    <span style="color: #f92672">&lt;x</span><span style="color: #a6e22e">-niceadmin</span><span style="color: #960050; background-color: #1e0010">.</span><span style="color: #a6e22e">alert-icon</span> <span style="color: #a6e22e">type=</span><span style="color: #e6db74">&quot;danger&quot;</span>       <span style="color: #a6e22e">icon=</span><span style="color: #e6db74">&quot;bi-exclamation-octagon&quot;</span>   <span style="color: #a6e22e">:message=</span><span style="color: #e6db74">&quot;$message&quot;</span><span style="color: #f92672">/&gt;</span>
    <span style="color: #f92672">&lt;x</span><span style="color: #a6e22e">-niceadmin</span><span style="color: #960050; background-color: #1e0010">.</span><span style="color: #a6e22e">alert-icon</span> <span style="color: #a6e22e">type=</span><span style="color: #e6db74">&quot;warning&quot;</span>      <span style="color: #a6e22e">icon=</span><span style="color: #e6db74">&quot;bi-exclamation-triangle&quot;</span>  <span style="color: #a6e22e">:message=</span><span style="color: #e6db74">&quot;$message&quot;</span><span style="color: #f92672">/&gt;</span>
    <span style="color: #f92672">&lt;x</span><span style="color: #a6e22e">-niceadmin</span><span style="color: #960050; background-color: #1e0010">.</span><span style="color: #a6e22e">alert-icon</span> <span style="color: #a6e22e">type=</span><span style="color: #e6db74">&quot;info&quot;</span>         <span style="color: #a6e22e">icon=</span><span style="color: #e6db74">&quot;bi-info-circle&quot;</span>           <span style="color: #a6e22e">:message=</span><span style="color: #e6db74">&quot;$message&quot;</span><span style="color: #f92672">/&gt;</span>
    <span style="color: #f92672">&lt;x</span><span style="color: #a6e22e">-niceadmin</span><span style="color: #960050; background-color: #1e0010">.</span><span style="color: #a6e22e">alert-icon</span> <span style="color: #a6e22e">type=</span><span style="color: #e6db74">&quot;light&quot;</span>        <span style="color: #a6e22e">icon=</span><span style="color: #e6db74">&quot;bi-folder&quot;</span>                <span style="color: #a6e22e">:message=</span><span style="color: #e6db74">&quot;$message&quot;</span><span style="color: #f92672">/&gt;</span>
    <span style="color: #f92672">&lt;x</span><span style="color: #a6e22e">-niceadmin</span><span style="color: #960050; background-color: #1e0010">.</span><span style="color: #a6e22e">alert-icon</span> <span style="color: #a6e22e">type=</span><span style="color: #e6db74">&quot;dark&quot;</span>         <span style="color: #a6e22e">icon=</span><span style="color: #e6db74">&quot;bi-folder&quot;</span>                <span style="color: #a6e22e">:message=</span><span style="color: #e6db74">&quot;$message&quot;</span><span style="color: #f92672">/&gt;</span>
    </pre></div><div class="mb-3"></div>

    <x-niceadmin.alert-icon type="primary"      icon="bi-star"                  :message="$message"/>
    <x-niceadmin.alert-icon type="secondary"    icon="bi-collection"            :message="$message"/>
    <x-niceadmin.alert-icon type="success"      icon="bi-check-circle"          :message="$message"/>
    <x-niceadmin.alert-icon type="danger"       icon="bi-exclamation-octagon"   :message="$message"/>
    <x-niceadmin.alert-icon type="warning"      icon="bi-exclamation-triangle"  :message="$message"/>
    <x-niceadmin.alert-icon type="info"         icon="bi-info-circle"           :message="$message"/>
    <x-niceadmin.alert-icon type="light"        icon="bi-folder"                :message="$message"/>
    <x-niceadmin.alert-icon type="dark"         icon="bi-folder"                :message="$message"/>


    <h5 class="card-title">Outlined</h5>

    <!-- HTML generated using hilite.me -->
    <div style="background: #272822; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;">
    <pre></pre>
    <pre style="margin: 0; line-height: 125%">    <span style="color: #f92672">&lt;x</span><span style="color: #a6e22e">-niceadmin</span><span style="color: #960050; background-color: #1e0010">.</span><span style="color: #a6e22e">alert-outlined</span> <span style="color: #a6e22e">type=</span><span style="color: #e6db74">&quot;primary&quot;</span>   <span style="color: #a6e22e">:message=</span><span style="color: #e6db74">&quot;$message&quot;</span><span style="color: #f92672">/&gt;</span>
    <span style="color: #f92672">&lt;x</span><span style="color: #a6e22e">-niceadmin</span><span style="color: #960050; background-color: #1e0010">.</span><span style="color: #a6e22e">alert-outlined</span> <span style="color: #a6e22e">type=</span><span style="color: #e6db74">&quot;secondary&quot;</span> <span style="color: #a6e22e">:message=</span><span style="color: #e6db74">&quot;$message&quot;</span><span style="color: #f92672">/&gt;</span>
    <span style="color: #f92672">&lt;x</span><span style="color: #a6e22e">-niceadmin</span><span style="color: #960050; background-color: #1e0010">.</span><span style="color: #a6e22e">alert-outlined</span> <span style="color: #a6e22e">type=</span><span style="color: #e6db74">&quot;success&quot;</span>   <span style="color: #a6e22e">:message=</span><span style="color: #e6db74">&quot;$message&quot;</span><span style="color: #f92672">/&gt;</span>
    <span style="color: #f92672">&lt;x</span><span style="color: #a6e22e">-niceadmin</span><span style="color: #960050; background-color: #1e0010">.</span><span style="color: #a6e22e">alert-outlined</span> <span style="color: #a6e22e">type=</span><span style="color: #e6db74">&quot;danger&quot;</span>    <span style="color: #a6e22e">:message=</span><span style="color: #e6db74">&quot;$message&quot;</span><span style="color: #f92672">/&gt;</span>
    <span style="color: #f92672">&lt;x</span><span style="color: #a6e22e">-niceadmin</span><span style="color: #960050; background-color: #1e0010">.</span><span style="color: #a6e22e">alert-outlined</span> <span style="color: #a6e22e">type=</span><span style="color: #e6db74">&quot;warning&quot;</span>   <span style="color: #a6e22e">:message=</span><span style="color: #e6db74">&quot;$message&quot;</span><span style="color: #f92672">/&gt;</span>
    <span style="color: #f92672">&lt;x</span><span style="color: #a6e22e">-niceadmin</span><span style="color: #960050; background-color: #1e0010">.</span><span style="color: #a6e22e">alert-outlined</span> <span style="color: #a6e22e">type=</span><span style="color: #e6db74">&quot;info&quot;</span>      <span style="color: #a6e22e">:message=</span><span style="color: #e6db74">&quot;$message&quot;</span><span style="color: #f92672">/&gt;</span>
    <span style="color: #f92672">&lt;x</span><span style="color: #a6e22e">-niceadmin</span><span style="color: #960050; background-color: #1e0010">.</span><span style="color: #a6e22e">alert-outlined</span> <span style="color: #a6e22e">type=</span><span style="color: #e6db74">&quot;light&quot;</span>     <span style="color: #a6e22e">:message=</span><span style="color: #e6db74">&quot;$message&quot;</span><span style="color: #f92672">/&gt;</span>
    <span style="color: #f92672">&lt;x</span><span style="color: #a6e22e">-niceadmin</span><span style="color: #960050; background-color: #1e0010">.</span><span style="color: #a6e22e">alert-outlined</span> <span style="color: #a6e22e">type=</span><span style="color: #e6db74">&quot;dark&quot;</span>      <span style="color: #a6e22e">:message=</span><span style="color: #e6db74">&quot;$message&quot;</span><span style="color: #f92672">/&gt;</span>
    </pre></div><div class="mb-3"></div>

    <x-niceadmin.alert-outlined type="primary"   :message="$message"/>
    <x-niceadmin.alert-outlined type="secondary" :message="$message"/>
    <x-niceadmin.alert-outlined type="success"   :message="$message"/>
    <x-niceadmin.alert-outlined type="danger"    :message="$message"/>
    <x-niceadmin.alert-outlined type="warning"   :message="$message"/>
    <x-niceadmin.alert-outlined type="info"      :message="$message"/>
    <x-niceadmin.alert-outlined type="light"     :message="$message"/>
    <x-niceadmin.alert-outlined type="dark"      :message="$message"/>


    <h5 class="card-title">Default Solid Color</h5>

    <!-- HTML generated using hilite.me -->
    <div style="background: #272822; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;">
    <pre></pre>
    <pre style="margin: 0; line-height: 125%">    <span style="color: #f92672">&lt;x</span><span style="color: #a6e22e">-niceadmin</span><span style="color: #960050; background-color: #1e0010">.</span><span style="color: #a6e22e">alert-solid</span> <span style="color: #a6e22e">type=</span><span style="color: #e6db74">&quot;primary&quot;</span>   <span style="color: #a6e22e">:message=</span><span style="color: #e6db74">&quot;$message&quot;</span><span style="color: #f92672">/&gt;</span>
    <span style="color: #f92672">&lt;x</span><span style="color: #a6e22e">-niceadmin</span><span style="color: #960050; background-color: #1e0010">.</span><span style="color: #a6e22e">alert-solid</span> <span style="color: #a6e22e">type=</span><span style="color: #e6db74">&quot;secondary&quot;</span> <span style="color: #a6e22e">:message=</span><span style="color: #e6db74">&quot;$message&quot;</span><span style="color: #f92672">/&gt;</span>
    <span style="color: #f92672">&lt;x</span><span style="color: #a6e22e">-niceadmin</span><span style="color: #960050; background-color: #1e0010">.</span><span style="color: #a6e22e">alert-solid</span> <span style="color: #a6e22e">type=</span><span style="color: #e6db74">&quot;success&quot;</span>   <span style="color: #a6e22e">:message=</span><span style="color: #e6db74">&quot;$message&quot;</span><span style="color: #f92672">/&gt;</span>
    <span style="color: #f92672">&lt;x</span><span style="color: #a6e22e">-niceadmin</span><span style="color: #960050; background-color: #1e0010">.</span><span style="color: #a6e22e">alert-solid</span> <span style="color: #a6e22e">type=</span><span style="color: #e6db74">&quot;danger&quot;</span>    <span style="color: #a6e22e">:message=</span><span style="color: #e6db74">&quot;$message&quot;</span><span style="color: #f92672">/&gt;</span>
    <span style="color: #f92672">&lt;x</span><span style="color: #a6e22e">-niceadmin</span><span style="color: #960050; background-color: #1e0010">.</span><span style="color: #a6e22e">alert-solid</span> <span style="color: #a6e22e">type=</span><span style="color: #e6db74">&quot;warning&quot;</span>   <span style="color: #a6e22e">:message=</span><span style="color: #e6db74">&quot;$message&quot;</span><span style="color: #f92672">/&gt;</span>
    <span style="color: #f92672">&lt;x</span><span style="color: #a6e22e">-niceadmin</span><span style="color: #960050; background-color: #1e0010">.</span><span style="color: #a6e22e">alert-solid</span> <span style="color: #a6e22e">type=</span><span style="color: #e6db74">&quot;info&quot;</span>      <span style="color: #a6e22e">:message=</span><span style="color: #e6db74">&quot;$message&quot;</span><span style="color: #f92672">/&gt;</span>
    <span style="color: #f92672">&lt;x</span><span style="color: #a6e22e">-niceadmin</span><span style="color: #960050; background-color: #1e0010">.</span><span style="color: #a6e22e">alert-solid</span> <span style="color: #a6e22e">type=</span><span style="color: #e6db74">&quot;light&quot;</span>     <span style="color: #a6e22e">:message=</span><span style="color: #e6db74">&quot;$message&quot;</span><span style="color: #f92672">/&gt;</span>
    <span style="color: #f92672">&lt;x</span><span style="color: #a6e22e">-niceadmin</span><span style="color: #960050; background-color: #1e0010">.</span><span style="color: #a6e22e">alert-solid</span> <span style="color: #a6e22e">type=</span><span style="color: #e6db74">&quot;dark&quot;</span>      <span style="color: #a6e22e">:message=</span><span style="color: #e6db74">&quot;$message&quot;</span><span style="color: #f92672">/&gt;</span>
    </pre></div><div class="mb-3"></div>
    
    <x-niceadmin.alert-solid type="primary"   :message="$message"/>
    <x-niceadmin.alert-solid type="secondary" :message="$message"/>
    <x-niceadmin.alert-solid type="success"   :message="$message"/>
    <x-niceadmin.alert-solid type="danger"    :message="$message"/>
    <x-niceadmin.alert-solid type="warning"   :message="$message"/>
    <x-niceadmin.alert-solid type="info"      :message="$message"/>
    <x-niceadmin.alert-solid type="light"     :message="$message"/>
    <x-niceadmin.alert-solid type="dark"      :message="$message"/>


    <h5 class="card-title">With Heading &amp Separator</h5>

    <x-niceadmin.alert-heading type="primary"   title="Primary Alert"   :message="$message"/>
    <x-niceadmin.alert-heading type="secondary" title="Seconday Alert"  :message="$message"/>
    <x-niceadmin.alert-heading type="success"   title="Success Alert"   :message="$message"/>
    <x-niceadmin.alert-heading type="danger"    title="Danger Alert"    :message="$message"/>
    <x-niceadmin.alert-heading type="warning"   title="Warning Alert"   :message="$message"/>
    <x-niceadmin.alert-heading type="info"      title="Info Alert"      :message="$message"/>
    <x-niceadmin.alert-heading type="light"     title="Light Alert"     :message="$message"/>
    <x-niceadmin.alert-heading type="dark"      title="Dark Alert"      :message="$message"/>
    
@endsection