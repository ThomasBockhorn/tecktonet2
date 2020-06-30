@extends('layouts.front')

@section('content')
		
	@include('components/frontend_components/welcome_components/slider/slider')
		
	@include('components/frontend_components/welcome_components/features/features')	
		
	@include('components/frontend_components/welcome_components/services/services')	
		
	@include('components/frontend_components/welcome_components/works/works')	
		
	@include('components/frontend_components/welcome_components/testimonials/testimonials')	
		
	@include('components/frontend_components/welcome_components/blog/blog')	
		
    @include('components/frontend_components/welcome_components/fun_facts/fun_facts')
    
    @include('components/frontend_components/welcome_components/team/team')
			
	@include('components/frontend_components/welcome_components/pricing/pricing')	
		
	@include('components/frontend_components/welcome_components/contact/contact')	
		
	@include('components/frontend_components/welcome_components/clients/clients')		
		
@endsection