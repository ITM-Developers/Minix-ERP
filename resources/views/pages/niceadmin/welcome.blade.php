@extends('layouts.themes.NiceAdmin.app')

@section('breadcrumb')
    @php
    $links = ["Dashboard","Home"];
    @endphp
    <x-niceadmin.breadcrumb :links="$links" title="Home" />
@endsection

@section('page-title','Welcome Page')

@section('content')
<p class="instrucciones">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo reprehenderit veritatis nostrum excepturi, necessitatibus vero labore inventore animi odio est corporis modi quia, unde quam ab at ipsam iste nam.
    Sit dicta fugit velit veritatis incidunt? Ex, minima enim placeat eos reiciendis eveniet explicabo fugit fuga natus modi. Vitae sequi distinctio hic nesciunt, explicabo ea animi eveniet numquam delectus labore?
    Asperiores, odio! Molestiae veritatis expedita iure, laborum, excepturi veniam sed dolores assumenda deleniti consequatur tenetur cum harum nemo? Labore amet recusandae quo necessitatibus earum laboriosam est repellendus iusto magnam qui.
    Molestiae, maxime. Non est nisi dicta veniam necessitatibus molestiae, molestias modi, quo suscipit quos mollitia, quam repellat impedit et vel earum tempore consectetur eum! Cum aut placeat consectetur illum blanditiis.
</p>

<p class="instrucciones">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo reprehenderit veritatis nostrum excepturi, necessitatibus vero labore inventore animi odio est corporis modi quia, unde quam ab at ipsam iste nam.
    Sit dicta fugit velit veritatis incidunt? Ex, minima enim placeat eos reiciendis eveniet explicabo fugit fuga natus modi. Vitae sequi distinctio hic nesciunt, explicabo ea animi eveniet numquam delectus labore?
    Asperiores, odio! Molestiae veritatis expedita iure, laborum, excepturi veniam sed dolores assumenda deleniti consequatur tenetur cum harum nemo? Labore amet recusandae quo necessitatibus earum laboriosam est repellendus iusto magnam qui.
    Molestiae, maxime. Non est nisi dicta veniam necessitatibus molestiae, molestias modi, quo suscipit quos mollitia, quam repellat impedit et vel earum tempore consectetur eum! Cum aut placeat consectetur illum blanditiis.
</p>

<p class="instrucciones">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo reprehenderit veritatis nostrum excepturi, necessitatibus vero labore inventore animi odio est corporis modi quia, unde quam ab at ipsam iste nam.
    Sit dicta fugit velit veritatis incidunt? Ex, minima enim placeat eos reiciendis eveniet explicabo fugit fuga natus modi. Vitae sequi distinctio hic nesciunt, explicabo ea animi eveniet numquam delectus labore?
    Asperiores, odio! Molestiae veritatis expedita iure, laborum, excepturi veniam sed dolores assumenda deleniti consequatur tenetur cum harum nemo? Labore amet recusandae quo necessitatibus earum laboriosam est repellendus iusto magnam qui.
    Molestiae, maxime. Non est nisi dicta veniam necessitatibus molestiae, molestias modi, quo suscipit quos mollitia, quam repellat impedit et vel earum tempore consectetur eum! Cum aut placeat consectetur illum blanditiis.
</p>
@endsection