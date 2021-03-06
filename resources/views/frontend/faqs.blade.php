@extends('layouts.frontend')
@section('content')
<section>
	@php
		$faqs = App\faqs::all();
		@endphp
      <div class="container">
        <div class="row">
          <div class="col-md-12">
             <div class="title center">
				<h2 style="color:#702c8d;">FAQs</h2>
				<br>
			</div>
			
            <ul class="accordion nav" data-open-first="true">
              @foreach($faqs as $data)
			              <li>
                <div class="accordion-title">
                  <h4>{{ $data->pertanyaan }}</h4>
                </div>
                <div class="accordion-content">
                    <p>{!!$data->jawaban!!}</p>
				</div>
              </li>  
              @endforeach             
		</ul>
		
			</div>
        </div>
      </div>
    </section>
    @endsection