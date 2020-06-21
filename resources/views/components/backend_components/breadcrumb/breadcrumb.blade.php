<!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
                
<div class="row page-titles">
    <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor">{{isset($title) ? $title: 'title'}}</h3>
        <ol class="breadcrumb">
            @foreach (Breadcrumbs::current() as $crumbs)
                @if ($crumbs->url() && !$loop->last)
                    <li class="breadcrumb-item">
                        <a href="{{ $crumbs->url() }}">
                            {{ $crumbs->title() }}
                        </a>
                    </li>
                 @else
                    <li class="breadcrumb-item active">
                        {{ $crumbs->title() }}
                    </li>
                @endif
            @endforeach
        </ol>
    </div>
</div>