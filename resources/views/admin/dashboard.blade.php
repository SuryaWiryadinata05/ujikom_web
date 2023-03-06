@extends('layouts.master')
@section('Dashboard')
@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                <em class="fa fa-home"></em>
                </a></li>
            <li class="active">Dashboard</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    <blockquote>
                        <p>Selamat Datang {{Auth::user()->username}} !</p>
                    </blockquote>
                </div>
            </div>
        </div>
    </div><!--/.row-->
    
</div><!--/.row-->


<div class="row-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <div class="col-lg-3">
            <div class="panel panel-default">
                <div class="panel-heading"style="background-color:gray;color:white;">Data Siswa</div>
                <div class="panel-body">
                    <blockquote>
                        <p>Jumlah Siswa {{App\Siswa::all()->count()}} </p>
                    </blockquote>
                </div>
            </div>
        </div>
    </div><!--/.row-->
    
    <div class="row">
        <div class="col-lg-3">
            <div class="panel panel-default">
                <div class="panel-heading"style="background-color:gray;color:white;">Data Kelas</div>
                <div class="panel-body">
                    <blockquote>
                        <p>Jumlah Kelas {{App\Kelas::all()->count()}} </p>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
    </div>
<!--/.main-->
@endsection