@extends('admin.layouts.adminmain')
@section('admincontent')

<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Admin Page</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                            <li class="breadcrumb-item active">Edit Project</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Edit Project</h5>

                                <p class="card-text">

                                <form action="{{ route('updateproject',$project->id) }}" class="form-image-upload" method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }}


                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <strong>Project Name</strong>
                                            <input type="text" name="project_name" value="{{ $project->projectName }}" class="form-control" placeholder="Project Name">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <strong>Sub Name:</strong>
                                            <input type="text" name="sub_name" value="{{ $project->subName }}" class="form-control" placeholder="Sub Name">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <strong>Client:</strong>
                                            <input type="text" name="client" value="{{ $project->client }}" class="form-control" placeholder="Title">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <strong>Location</strong>
                                            <input type="text" name="location" value="{{ $project->location }}" class="form-control" placeholder="Title">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <strong>Surface Area</strong>
                                            <input type="text" name="surfacearea" value="{{ $project->surfaceArea }}" class="form-control" placeholder="Surface Area">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <strong>Value</strong>
                                            <input type="text" name="value" value="{{ $project->value }}" class="form-control" placeholder="Value">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <strong>Architech</strong>
                                            <input type="text" name="architech" value="{{ $project->architech }}" class="form-control" placeholder="Title">
                                        </div>
                                        <div class="col-md-6 form-group">
                                        <strong>Tag</strong>
                                        <input type="text" name="tag" value="{{ $project->tag }}" class="form-control" placeholder="Tag">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <strong>Inner heading </strong>
                                            <input type="text" name="ih" value="{{ $project->innerHeading }}" class="form-control" placeholder="Inner Heading">
                                        </div>
                                        <div class="col-md-12 form-group">
                                            <strong>Inner Heading Content</strong>
                                            <input type="textarea" rows="4" name="ihc" value="{{ $project->innerHeadingContent }}" class="form-control" placeholder="Content">
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <strong>Image Main 1:</strong>
                                            <input type="file" name="main_image" value="{{ $project->imgmain }}" class="form-control">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <strong>Image  inner page 1:</strong>
                                            <input type="file" name="p1" value="{{ $project->innerimg1 }}" class="form-control">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <strong>Image  inner page 2:</strong>
                                            <input type="file" name="p2" value="{{ $project->innerimg2 }}" class="form-control">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <strong>Image  inner page 3:</strong>
                                            <input type="file" name="p3" value="{{ $project->innerimg3 }}" class="form-control">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <strong>Image  inner page 4:</strong>
                                            <input type="file" name="p4" value="{{ $project->innerimg4 }}" class="form-control">
                                        </div>
                                    </div>
                                        <div class="col-md-2 form-group">
                                                <br/>
                                                <button type="submit" class="btn btn-success">Update Project</button>
                                        </div>


                                </form>

                                </p>

                            </div>
                        </div>


                    </div>
                    <!-- /.col-md-6 -->


                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        <div class="p-3">
            <h5>Title</h5>
            <p>Sidebar content</p>
        </div>
    </aside>
    <!-- /.control-sidebar -->
@endsection
