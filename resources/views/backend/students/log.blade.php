@extends('backend.students.include.app')

@section('content')

<div class="row">
    @foreach($events as $event)
       
        @if($event['end'] > now())
            @break
        @else
        <div class="col-md-6 col-lg-3 col-sm-6">
            <div class="card card-block card-stretch card-height {{ ($event['status'] !== 'done') ? 'bg-primary' : 'bg-secondary' }}">
                <a href="{{ route('studentlogweek', [ $event['id'] , $student_id]) }}">
                    <div class="card-body">
                        <div class="top-block-one text-center">
                            <div class="bg-info icon iq-icon-box-2 d-block mx-auto rounded">
                                <i class="ri-global-fill"></i>
                            </div>
                            <div class="mt-4">
                                <h3  class="text-white text-capitalized">{{ $event['number']  }}</h3>
                                <p class="text-white mb-1">From {{ $event['start']->format('l jS F Y')  }}</p>
                                <span class="text-white s">To {{ $event['end']->format(' l jS F Y')  }}</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        @endif
    @endforeach
</div>
@endsection

@section('title')
    LOG
@endsection

@section('style')

@endsection

@section('script')

@endsection
