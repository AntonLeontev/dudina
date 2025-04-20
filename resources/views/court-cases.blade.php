@extends('layouts.app')

@section('content')
<section class="hero">
	<div class="hero__container">
		<div class="auctions">
			@foreach ($auctions as $auction)
				<div class="auction">
					@if (!empty($auction->image))
						<div class="auction__image">
							<img src="{{ 'storage/' . $auction->image }}" alt="">
						</div>
					@endif

					<div class="auction__content">
						<h3 class="auction__title">
							{{ $auction->title }}
						</h3>

						<div class="auction__descr">{!! str($auction->description)->replace("\n", '<br>') !!}</div>

						@if (!empty($auction->link))
							<div class="auction__link button">
								<a href="{{ $auction->link }}">Площадка</a>
							</div>
						@endif
					</div>
				</div>
			@endforeach
		</div>
	</div>
</section>
@endsection
