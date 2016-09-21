@extends('backend.layouts.app')

@section('title')Detail Category
@stop

@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>@yield('title') - {{ $category->name }}</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="row">
                    <div class="form-group">
                        <label class="control-label col-md-3">Category Name</label>
                        <div class="col-md-5">
                            {{ $category->name }}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label class="control-label col-md-3">Parent Category</label>
                        <div class="col-md-5">
                            {{ $category->parent_category }}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label class="control-label col-md-3">Description</label>
                        <div class="col-md-5">
                            {{ $category->description }}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label class="control-label col-md-3">Presentation Material</label>
                        <div class="col-md-5">
                            {{ $category->presentation_material }} %
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label class="control-label col-md-3">Communication Skill</label>
                        <div class="col-md-5">
                            {{ $category->communication_skill }} %
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label class="control-label col-md-3">Achievement</label>
                        <div class="col-md-5">
                            {{ $category->achievement }} %
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label class="control-label col-md-3">Personal Value</label>
                        <div class="col-md-5">
                            {{ $category->personal_value }} %
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label class="control-label col-md-3">Customer Care Knowledge</label>
                        <div class="col-md-5">
                            {{ $category->customer_care_knowledge }} %
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label class="control-label col-md-3">Solution Skill</label>
                        <div class="col-md-5">
                            {{ $category->solution_skill }} %
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label class="control-label col-md-3">Inspirational Story</label>
                        <div class="col-md-5">
                            {{ $category->inspirational_story }} %
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="form-group">
                        <center>
                            <a href="{{ url('category') }}" class="btn btn-primary">Kembali</a>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
