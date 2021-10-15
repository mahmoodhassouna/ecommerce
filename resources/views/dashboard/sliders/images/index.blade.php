@extends('layouts.admin')
@section('content_admin')

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="">الرئيسية </a>
                                </li>

                                <li class="breadcrumb-item active"> اسليدر الرئيسيه
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Basic form layout section start -->
                <section id="basic-form-layouts">
                    <div class="row match-height">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <a class="heading-elements-toggle"><i
                                            class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                @include('dashboard.includes.alerts.success')
                                @include('dashboard.includes.alerts.errors')
                                <div class="card-content collapse show">
                                    <div class="card-body">


                                        <div class="card-content collapse show">
                                            <div class="card-body">
                                                <div class="card-text">
                                                    <p>الصوره الحاليه.</p>
                                                </div>
                                            </div>
                                            <div class="card-body  my-gallery" itemscope="" itemtype="http://schema.org/ImageGallery"
                                                 data-pswp-uid="1">
                                                <div class="row">
                                                    @isset($images)
                                                        @forelse($images as $image )
                                                            <figure class="col-lg-3 col-md-6 col-12" itemprop="associatedMedia" itemscope=""
                                                                    itemtype="http://schema.org/ImageObject">
                                                                <a href="{{$image -> photo}}" itemprop="contentUrl"
                                                                   data-size="480x360">
                                                                    <img class="img-thumbnail img-fluid"
                                                                         src="{{$image -> photo}}"
                                                                         itemprop="thumbnail" alt="Image description">
                                                                </a>
                                                            </figure>
                                                        @empty
                                                            لا يوجد صور حتي اللحظه
                                                        @endforelse
                                                    @endisset
                                                </div>

                                            </div>
                                            <!--/ Image grid -->

                                            <!-- Root element of PhotoSwipe. Must have class pswp. -->

                                            <div class="form-actions">
                                                <button type="button" class="btn btn-warning mr-1"
                                                        onclick="history.back();">
                                                    <i class="ft-x"></i> تراجع
                                                </button>

                                            </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Basic form layout section end -->
            </div>




        </div>
    </div>


@stop
