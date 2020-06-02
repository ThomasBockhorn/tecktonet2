@extends('layouts.front')

@section('content')
		
	@include('components/slider/slider')
		
	@include('components/features/features')	
		
	@include('components/services/services')	
		
	@include('components/works/works')	
		
	@include('components/testimonials/testimonials')	
		
	@include('components/blog/blog')	
		
    @include('components/fun_facts/fun_facts')
    
    @include('components/team/team')
			
	@include('components/pricing/pricing')	
		
	@include('components/contact/contact')	
		
	@include('components/clients/clients')	
		
		
@endsection