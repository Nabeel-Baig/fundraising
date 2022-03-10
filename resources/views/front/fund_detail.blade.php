@extends('front.layouts.app')
@section('title') {{ $fund->name }} @endsection
@section('content')
<main>
    <section class="detailsPageMainBanner pt-5 pb-5"></section>
    <section class="detailsCardSection">
        <div class="container mt-5">
            <div class="col-lg-10 mt-5">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card bg-transparent border-0">
                            <h3><b>{{ $fund->name }}</b></h3>
                            <img class="w-100" src="{{ $fund->image }}" alt="{{ $fund->image }}">
                            <div class="row">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-11">
                                    <div class="detailPageIcon">
                                        {{ $fund->users->name }} is organizing this fundraiser.
                                    </div>
                                    <div class="postedOn">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="createdBorderRight">
                                                    Created {{ \Carbon\Carbon::parse($fund->created_at)->diffInDays() }} days ago.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="detailpageDonaterDiscribtion mt-4">
                                        <p>{{ $fund->description }}</p>
                                        <div class="row mt-4 mb-4">
                                            <div class="col-lg-6">
                                                <a class="StartAfundly p-2" href="{{ route('donation',[$fund->id]) }}">Donate</a>
                                            </div>
                                            <div class="col-lg-6">
                                                <a class="startedBtn mt-0 mb-0 text-light" href="javascript:void(0)">Share</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-5">
                        <div class="card sideCard shadow">
                            <div class="card-body">
                                <div class="card-title">
                                    <h4><b>${{ number_format($donations->donation_amount) }}</b> <span class="goal">USD raised of ${{ number_format($fund->amount) }} goal</span></h4>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar percent" role="progressbar" aria-valuenow="{{ getPercentage($donations->donation_amount,$fund->amount) }}" aria-valuemin="0" aria-valuemax="100" style="max-width: {{ getPercentage($donations->donation_amount,$fund->amount) }}%"></div>
                              </div>
                              <p class="text-muted">
                                  {{ $donations->donation_count }} donations
                              </p>
                              <div class="col-lg-12 mb-3">
                                  <a class="StartAfundly p-2" href="{{ route('donation',[$fund->id]) }}">Donate Now</a>
                              </div>
                              <div class="col-lg-12">
                                  <a class="startedBtn mt-0 mb-0 text-light" href="javascript:void(0)">Share</a>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

