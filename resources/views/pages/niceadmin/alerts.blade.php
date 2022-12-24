@extends('layouts.themes.NiceAdmin.app')

@section('page-title','Alerts')

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

    <div class="code-sample mb-4">
    <pre>
    <span></span>
    <span class="c-pink">&lt;x-niceadmin-alert</span> <span class="c-green">type=</span><span class="c-beige">&quot;primary&quot;</span>   <span class="c-green">:message=</span><span class="c-beige">&quot;$message&quot;</span><span class="c-pink">/&gt;</span>
    <span class="c-pink"><span class="c-pink">&lt;x-niceadmin-alert</span> <span class="c-green">type=</span><span class="c-beige">&quot;secondary&quot;</span> <span class="c-green">:message=</span><span class="c-beige">&quot;$message&quot;</span><span class="c-pink">/&gt;</span>
    <span class="c-pink"><span class="c-pink">&lt;x-niceadmin-alert</span> <span class="c-green">type=</span><span class="c-beige">&quot;success&quot;</span>   <span class="c-green">:message=</span><span class="c-beige">&quot;$message&quot;</span><span class="c-pink">/&gt;</span>
    <span class="c-pink"><span class="c-pink">&lt;x-niceadmin-alert</span> <span class="c-green">type=</span><span class="c-beige">&quot;danger&quot;</span>    <span class="c-green">:message=</span><span class="c-beige">&quot;$message&quot;</span><span class="c-pink">/&gt;</span>
    <span class="c-pink"><span class="c-pink">&lt;x-niceadmin-alert</span> <span class="c-green">type=</span><span class="c-beige">&quot;warning&quot;</span>   <span class="c-green">:message=</span><span class="c-beige">&quot;$message&quot;</span><span class="c-pink">/&gt;</span>
    <span class="c-pink"><span class="c-pink">&lt;x-niceadmin-alert</span> <span class="c-green">type=</span><span class="c-beige">&quot;info&quot;</span>      <span class="c-green">:message=</span><span class="c-beige">&quot;$message&quot;</span><span class="c-pink">/&gt;</span>
    <span class="c-pink"><span class="c-pink">&lt;x-niceadmin-alert</span> <span class="c-green">type=</span><span class="c-beige">&quot;light&quot;</span>     <span class="c-green">:message=</span><span class="c-beige">&quot;$message&quot;</span><span class="c-pink">/&gt;</span>
    <span class="c-pink"><span class="c-pink">&lt;x-niceadmin-alert</span> <span class="c-green">type=</span><span class="c-beige">&quot;dark&quot;</span>      <span class="c-green">:message=</span><span class="c-beige">&quot;$message&quot;</span><span class="c-pink">/&gt;</span></pre>
    </div>

    <x-nice-admin-alert type="primary"   :message="$message"/>
    <x-nice-admin-alert type="secondary" :message="$message"/>
    <x-nice-admin-alert type="success"   :message="$message"/>
    <x-nice-admin-alert type="danger"    :message="$message"/>
    <x-nice-admin-alert type="warning"   :message="$message"/>
    <x-nice-admin-alert type="info"      :message="$message"/>
    <x-nice-admin-alert type="light"     :message="$message"/>
    <x-nice-admin-alert type="dark"      :message="$message"/>

    <h5 class="card-title">With Icons</h5>
    
    <div class="code-sample mb-4">
    <pre>
    <span></span>
    <span class="c-pink">&lt;x-nice-admin-alert-icon</span> <span class="c-green">type=</span><span class="c-beige">&quot;primary&quot;</span>      <span class="c-green">icon=</span><span class="c-beige">&quot;bi-star&quot;</span>                  <span class="c-green">:message=</span><span class="c-beige">&quot;$message&quot;</span><span class="c-pink">/&gt;</span>
    <span class="c-pink">&lt;x-nice-admin-alert-icon</span> <span class="c-green">type=</span><span class="c-beige">&quot;secondary&quot;</span>    <span class="c-green">icon=</span><span class="c-beige">&quot;bi-collection&quot;</span>            <span class="c-green">:message=</span><span class="c-beige">&quot;$message&quot;</span><span class="c-pink">/&gt;</span>
    <span class="c-pink">&lt;x-nice-admin-alert-icon</span> <span class="c-green">type=</span><span class="c-beige">&quot;success&quot;</span>      <span class="c-green">icon=</span><span class="c-beige">&quot;bi-check-circle&quot;</span>          <span class="c-green">:message=</span><span class="c-beige">&quot;$message&quot;</span><span class="c-pink">/&gt;</span>
    <span class="c-pink">&lt;x-nice-admin-alert-icon</span> <span class="c-green">type=</span><span class="c-beige">&quot;danger&quot;</span>       <span class="c-green">icon=</span><span class="c-beige">&quot;bi-exclamation-octagon&quot;</span>   <span class="c-green">:message=</span><span class="c-beige">&quot;$message&quot;</span><span class="c-pink">/&gt;</span>
    <span class="c-pink">&lt;x-nice-admin-alert-icon</span> <span class="c-green">type=</span><span class="c-beige">&quot;warning&quot;</span>      <span class="c-green">icon=</span><span class="c-beige">&quot;bi-exclamation-triangle&quot;</span>  <span class="c-green">:message=</span><span class="c-beige">&quot;$message&quot;</span><span class="c-pink">/&gt;</span>
    <span class="c-pink">&lt;x-nice-admin-alert-icon</span> <span class="c-green">type=</span><span class="c-beige">&quot;info&quot;</span>         <span class="c-green">icon=</span><span class="c-beige">&quot;bi-info-circle&quot;</span>           <span class="c-green">:message=</span><span class="c-beige">&quot;$message&quot;</span><span class="c-pink">/&gt;</span>
    <span class="c-pink">&lt;x-nice-admin-alert-icon</span> <span class="c-green">type=</span><span class="c-beige">&quot;light&quot;</span>        <span class="c-green">icon=</span><span class="c-beige">&quot;bi-folder&quot;</span>                <span class="c-green">:message=</span><span class="c-beige">&quot;$message&quot;</span><span class="c-pink">/&gt;</span>
    <span class="c-pink">&lt;x-nice-admin-alert-icon</span> <span class="c-green">type=</span><span class="c-beige">&quot;dark&quot;</span>         <span class="c-green">icon=</span><span class="c-beige">&quot;bi-folder&quot;</span>                <span class="c-green">:message=</span><span class="c-beige">&quot;$message&quot;</span><span class="c-pink">/&gt;</span></pre>
    </div>

    <x-nice-admin-alert-icon type="primary"      icon="bi-star"                  :message="$message"/>
    <x-nice-admin-alert-icon type="secondary"    icon="bi-collection"            :message="$message"/>
    <x-nice-admin-alert-icon type="success"      icon="bi-check-circle"          :message="$message"/>
    <x-nice-admin-alert-icon type="danger"       icon="bi-exclamation-octagon"   :message="$message"/>
    <x-nice-admin-alert-icon type="warning"      icon="bi-exclamation-triangle"  :message="$message"/>
    <x-nice-admin-alert-icon type="info"         icon="bi-info-circle"           :message="$message"/>
    <x-nice-admin-alert-icon type="light"        icon="bi-folder"                :message="$message"/>
    <x-nice-admin-alert-icon type="dark"         icon="bi-folder"                :message="$message"/>


    <h5 class="card-title">Outlined</h5>

    <div class="code-sample mb-4">
    <pre>
    <span></span>
    <span class="c-pink">&lt;x-nice-admin-alert-outlined</span> <span class="c-green">type=</span><span class="c-beige">&quot;primary&quot;</span>   <span class="c-green">:message=</span><span class="c-beige">&quot;$message&quot;</span><span class="c-pink">/&gt;</span>
    <span class="c-pink">&lt;x-nice-admin-alert-outlined</span> <span class="c-green">type=</span><span class="c-beige">&quot;secondary&quot;</span> <span class="c-green">:message=</span><span class="c-beige">&quot;$message&quot;</span><span class="c-pink">/&gt;</span>
    <span class="c-pink">&lt;x-nice-admin-alert-outlined</span> <span class="c-green">type=</span><span class="c-beige">&quot;success&quot;</span>   <span class="c-green">:message=</span><span class="c-beige">&quot;$message&quot;</span><span class="c-pink">/&gt;</span>
    <span class="c-pink">&lt;x-nice-admin-alert-outlined</span> <span class="c-green">type=</span><span class="c-beige">&quot;danger&quot;</span>    <span class="c-green">:message=</span><span class="c-beige">&quot;$message&quot;</span><span class="c-pink">/&gt;</span>
    <span class="c-pink">&lt;x-nice-admin-alert-outlined</span> <span class="c-green">type=</span><span class="c-beige">&quot;warning&quot;</span>   <span class="c-green">:message=</span><span class="c-beige">&quot;$message&quot;</span><span class="c-pink">/&gt;</span>
    <span class="c-pink">&lt;x-nice-admin-alert-outlined</span> <span class="c-green">type=</span><span class="c-beige">&quot;info&quot;</span>      <span class="c-green">:message=</span><span class="c-beige">&quot;$message&quot;</span><span class="c-pink">/&gt;</span>
    <span class="c-pink">&lt;x-nice-admin-alert-outlined</span> <span class="c-green">type=</span><span class="c-beige">&quot;light&quot;</span>     <span class="c-green">:message=</span><span class="c-beige">&quot;$message&quot;</span><span class="c-pink">/&gt;</span>
    <span class="c-pink">&lt;x-nice-admin-alert-outlined</span> <span class="c-green">type=</span><span class="c-beige">&quot;dark&quot;</span>      <span class="c-green">:message=</span><span class="c-beige">&quot;$message&quot;</span><span class="c-pink">/&gt;</span></pre>
    </div>

    <x-nice-admin-alert-outlined type="primary"   :message="$message"/>
    <x-nice-admin-alert-outlined type="secondary" :message="$message"/>
    <x-nice-admin-alert-outlined type="success"   :message="$message"/>
    <x-nice-admin-alert-outlined type="danger"    :message="$message"/>
    <x-nice-admin-alert-outlined type="warning"   :message="$message"/>
    <x-nice-admin-alert-outlined type="info"      :message="$message"/>
    <x-nice-admin-alert-outlined type="light"     :message="$message"/>
    <x-nice-admin-alert-outlined type="dark"      :message="$message"/>

    <h5 class="card-title">Default Solid Color</h5>
    
    <div class="code-sample mb-4">
    <pre>
    <span></span>
    <span class="c-pink">&lt;x-nice-admin-alert-solid</span> <span class="c-green">type=</span><span class="c-beige">&quot;primary&quot;</span>   <span class="c-green">:message=</span><span class="c-beige">&quot;$message&quot;</span><span class="c-pink">/&gt;</span>
    <span class="c-pink">&lt;x-nice-admin-alert-solid</span> <span class="c-green">type=</span><span class="c-beige">&quot;secondary&quot;</span> <span class="c-green">:message=</span><span class="c-beige">&quot;$message&quot;</span><span class="c-pink">/&gt;</span>
    <span class="c-pink">&lt;x-nice-admin-alert-solid</span> <span class="c-green">type=</span><span class="c-beige">&quot;success&quot;</span>   <span class="c-green">:message=</span><span class="c-beige">&quot;$message&quot;</span><span class="c-pink">/&gt;</span>
    <span class="c-pink">&lt;x-nice-admin-alert-solid</span> <span class="c-green">type=</span><span class="c-beige">&quot;danger&quot;</span>    <span class="c-green">:message=</span><span class="c-beige">&quot;$message&quot;</span><span class="c-pink">/&gt;</span>
    <span class="c-pink">&lt;x-nice-admin-alert-solid</span> <span class="c-green">type=</span><span class="c-beige">&quot;warning&quot;</span>   <span class="c-green">:message=</span><span class="c-beige">&quot;$message&quot;</span><span class="c-pink">/&gt;</span>
    <span class="c-pink">&lt;x-nice-admin-alert-solid</span> <span class="c-green">type=</span><span class="c-beige">&quot;info&quot;</span>      <span class="c-green">:message=</span><span class="c-beige">&quot;$message&quot;</span><span class="c-pink">/&gt;</span>
    <span class="c-pink">&lt;x-nice-admin-alert-solid</span> <span class="c-green">type=</span><span class="c-beige">&quot;light&quot;</span>     <span class="c-green">:message=</span><span class="c-beige">&quot;$message&quot;</span><span class="c-pink">/&gt;</span>
    <span class="c-pink">&lt;x-nice-admin-alert-solid</span> <span class="c-green">type=</span><span class="c-beige">&quot;dark&quot;</span>      <span class="c-green">:message=</span><span class="c-beige">&quot;$message&quot;</span><span class="c-pink">/&gt;</span></pre>
    </div>
    
    <x-nice-admin-alert-solid type="primary"   :message="$message"/>
    <x-nice-admin-alert-solid type="secondary" :message="$message"/>
    <x-nice-admin-alert-solid type="success"   :message="$message"/>
    <x-nice-admin-alert-solid type="danger"    :message="$message"/>
    <x-nice-admin-alert-solid type="warning"   :message="$message"/>
    <x-nice-admin-alert-solid type="info"      :message="$message"/>
    <x-nice-admin-alert-solid type="light"     :message="$message"/>
    <x-nice-admin-alert-solid type="dark"      :message="$message"/>

    <h5 class="card-title">With Heading &amp Separator</h5>

    <div class="code-sample mb-4">
    <pre>
    <span></span>
    <span class="c-pink">&lt;x-nice-admin-alert-title</span> <span class="c-green">type=</span><span class="c-beige">&quot;primary&quot;</span>   <span class="c-green">title=</span><span class="c-beige">&quot;Primary Alert&quot;</span>   <span class="c-green">:message=</span><span class="c-beige">&quot;$message&quot;</span><span class="c-pink">/&gt;</span>
    <span class="c-pink">&lt;x-nice-admin-alert-title</span> <span class="c-green">type=</span><span class="c-beige">&quot;secondary&quot;</span> <span class="c-green">title=</span><span class="c-beige">&quot;Seconday Alert&quot;</span>  <span class="c-green">:message=</span><span class="c-beige">&quot;$message&quot;</span><span class="c-pink">/&gt;</span>
    <span class="c-pink">&lt;x-nice-admin-alert-title</span> <span class="c-green">type=</span><span class="c-beige">&quot;success&quot;</span>   <span class="c-green">title=</span><span class="c-beige">&quot;Success Alert&quot;</span>   <span class="c-green">:message=</span><span class="c-beige">&quot;$message&quot;</span><span class="c-pink">/&gt;</span>
    <span class="c-pink">&lt;x-nice-admin-alert-title</span> <span class="c-green">type=</span><span class="c-beige">&quot;danger&quot;</span>    <span class="c-green">title=</span><span class="c-beige">&quot;Danger Alert&quot;</span>    <span class="c-green">:message=</span><span class="c-beige">&quot;$message&quot;</span><span class="c-pink">/&gt;</span>
    <span class="c-pink">&lt;x-nice-admin-alert-title</span> <span class="c-green">type=</span><span class="c-beige">&quot;warning&quot;</span>   <span class="c-green">title=</span><span class="c-beige">&quot;Warning Alert&quot;</span>   <span class="c-green">:message=</span><span class="c-beige">&quot;$message&quot;</span><span class="c-pink">/&gt;</span>
    <span class="c-pink">&lt;x-nice-admin-alert-title</span> <span class="c-green">type=</span><span class="c-beige">&quot;info&quot;</span>      <span class="c-green">title=</span><span class="c-beige">&quot;Info Alert&quot;</span>      <span class="c-green">:message=</span><span class="c-beige">&quot;$message&quot;</span><span class="c-pink">/&gt;</span>
    <span class="c-pink">&lt;x-nice-admin-alert-title</span> <span class="c-green">type=</span><span class="c-beige">&quot;light&quot;</span>     <span class="c-green">title=</span><span class="c-beige">&quot;Light Alert&quot;</span>     <span class="c-green">:message=</span><span class="c-beige">&quot;$message&quot;</span><span class="c-pink">/&gt;</span>
    <span class="c-pink">&lt;x-nice-admin-alert-title</span> <span class="c-green">type=</span><span class="c-beige">&quot;dark&quot;</span>      <span class="c-green">title=</span><span class="c-beige">&quot;Dark Alert&quot;</span>      <span class="c-green">:message=</span><span class="c-beige">&quot;$message&quot;</span><span class="c-pink">/&gt;</span></pre>
    </div>

    <x-nice-admin-alert-title type="primary"   title="Primary Alert"   :message="$message"/>
    <x-nice-admin-alert-title type="secondary" title="Seconday Alert"  :message="$message"/>
    <x-nice-admin-alert-title type="success"   title="Success Alert"   :message="$message"/>
    <x-nice-admin-alert-title type="danger"    title="Danger Alert"    :message="$message"/>
    <x-nice-admin-alert-title type="warning"   title="Warning Alert"   :message="$message"/>
    <x-nice-admin-alert-title type="info"      title="Info Alert"      :message="$message"/>
    <x-nice-admin-alert-title type="light"     title="Light Alert"     :message="$message"/>
    <x-nice-admin-alert-title type="dark"      title="Dark Alert"      :message="$message"/>
    
@endsection