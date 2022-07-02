@extends('admin.layouts.app')

@section('content')

<div class="main-panel">
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Dashboard</h4>
                <ul class="breadcrumbs">
                    <li class="nav-home">
                        <a href="#">
                            <i class="flaticon-home"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Pages</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Starter Page</a>
                    </li>
                </ul>
            </div>
            <div class="page-category">Inner page content goes here</div>
        </div>
    </div>
    <footer class="footer">
        <div class="container-fluid">
            <nav class="pull-left">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="http://www.themekita.com">
                            ThemeKita
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://api.whatsapp.com/send/?phone=6282148722747&text=Hi,+we+are+form+Swajasa+Lintas+Media+request+Support+Service">
                            Help
                        </a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="#">
                            Licenses
                        </a>
                    </li> --}}
                </ul>
            </nav>
            <div class="copyright ml-auto">
                <span class="text-muted fst-italic">Copyright &copy; WanSite 2022</span>
                {{-- 2018, made with <i class="fa fa-heart heart text-danger"></i> by <a href="http://www.themekita.com">ThemeKita</a> --}}
            </div>				
        </div>
    </footer>
</div>
    
@endsection