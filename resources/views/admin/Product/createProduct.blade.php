@extends('admin.layout.master')
@section('content')
    <div class="container cardContainer">
        <div class="card  categoryCard">
            <div class="card-header mt-3">
                <div class="navbar-brand-box" style="text-align: center">

                </div>
                <div class="card-body">
                    <form action="{{ route('store.product') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @include('admin.Product.fields')
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
