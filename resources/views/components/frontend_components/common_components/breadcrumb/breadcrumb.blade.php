<!--breadcrumb -->
<div class="breadcrumb" data-stellar-background-ratio="0.5">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="breadcrumb-text">
							<h2>Blog</h2>
                            <ul>
                                @foreach (Breadcrumbs::current() as $crumbs)
                                @if ($crumbs->url() && !$loop->last)
                                    <li>
                                        <a class="front_crumb" href="{{ $crumbs->url() }}">
                                            {{ $crumbs->title() }}
                                            <i class="fas fa-long-arrow-alt-right" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                 @else
                                    <li class="breadcrumb-item active front_crumb">
                                        {{ $crumbs->title() }}
                                    </li>
                                @endif
                                @endforeach
                            </ul>
						</div>
					</div>
				</div>
			</div>
</div>
<!--/ End breadcrumb -->