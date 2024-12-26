@extends('layouts.app')

@section('contentBody')

<div class="container-fluid">
  <div class="nk-content-inner">
    <div class="nk-content-body">
      <div class="nk-block-head nk-block-head-sm">
        <div class="nk-block-between">
          <div class="nk-block-head-content">
            <h3 class="nk-block-title page-title">Статистика</h3>
            <div class="nk-block-des text-soft">
              <p>Основные показатели</p>
            </div>
          </div><!-- .nk-block-head-content -->

        </div><!-- .nk-block-between -->
      </div><!-- .nk-block-head -->
      <div class="nk-block">
        <div class="row g-gs">
          <div class="col-xxl-12">
            <div class="row g-gs">
              
              <div class="col-lg-6 col-xxl-12">
                <div class="row g-gs">
                  <div class="col-sm-12 col-lg-12 col-xxl-12">
                    <div class="card card-bordered">
                      <div class="card-inner">
                        <div class="card-title-group align-start mb-2">
                          <div class="card-title">
                            <h6 class="title">Медикаменты</h6>
                          </div>
                          
                        </div>
                        <div class="align-end flex-sm-wrap g-4 flex-md-nowrap">
                          <div class="nk-sale-data">
                            <span class="amount">{{number_format($itemCount,0,' ',' ')}}</span>
                            <span class="sub-title"><span class="change down text-danger">
                                </span>медикаментов</span>
                          </div>
                          
                        </div>
                      </div>
                    </div><!-- .card -->
                  </div><!-- .col -->
                  
                </div><!-- .row -->
              </div><!-- .col -->
            </div><!-- .row -->
          </div><!-- .col -->
  
          <div class="col-xxl-8">
            <div class="card card-bordered card-full">
              <div class="card-inner">
                <div class="card-title-group">
                  <div class="card-title">
                    <h6 class="title"><span class="mr-2">Статистика по поиску</span> <a href="{{route('admin.stat')}}" class="link d-none d-sm-inline">Все</a></h6>
                  </div>
                  
                </div>
              </div>
              <div class="card-inner p-0 border-top">
                <div class="nk-tb-list nk-tb-orders">
                  <div class="nk-tb-item nk-tb-head">
                    <div class="nk-tb-col"><span>Локация</span></div>
                    <div class="nk-tb-col tb-col-sm"><span>Товар</span></div>
                    <div class="nk-tb-col tb-col-md"><span>Баркод</span></div>
                    <div class="nk-tb-col tb-col-lg"><span>Статус</span></div>
                    <div class="nk-tb-col"><span>Дата</span></div>

                  </div>
                  @foreach($stats as $stat)
                  <div class="nk-tb-item">
                    <div class="nk-tb-col">
                      <span class="tb-lead">{{$stat->name}}</span>
                    </div>
                    <div class="nk-tb-col tb-col-sm">
                      <div class="user-card">
                        <div class="user-name">
                        @if($stat->found)
                          <span class="tb-lead">{{$stat->item->name}}</span>
                    
                        @else
                          <span class="tb-lead">Товар не найден</span>
                    
                        @endif
                          
                        </div>
                      </div>
                    </div>
                    <div class="nk-tb-col tb-col-md">
                      <span class="tb-sub">{{$stat->barcode}}</span>
                    </div>
                    <div class="nk-tb-col tb-col-lg">
                    @if($stat->found)
                    <span class="badge badge-dot badge-dot-xs badge-success">Yes</span>
                    
                    @else
                      <span class="badge badge-dot badge-dot-xs badge-danger">No</span>
                    
                    @endif

                    
                     
                    </div>
                    <div class="nk-tb-col">
                      <span class="tb-sub tb-amount">{{$stat->created_at}}</span>
                    </div>

                  </div>
                 @endforeach
                </div>
              </div>
              <div class="card-inner-sm border-top text-center d-sm-none">
                <a href="{{route('admin.stat')}}" class="btn btn-link btn-block">See All</a>
              </div>
            </div><!-- .card -->
          </div><!-- .col -->
          <div class="col-md-6 col-xxl-4">
            <div class="card card-bordered card-full">
              <div class="card-inner border-bottom">
                <div class="card-title-group">
                  <div class="card-title">
                    <h6 class="title">Локации</h6>
                  </div>

                </div>
              </div>
              <ul class="nk-activity">
                @foreach($shops as $shop)
                <li class="nk-activity-item">

                  <div class="nk-activity-data">
                    <div class="label">{{$shop->name}}</div>

                  </div>
                </li>
                @endforeach

              </ul>
            </div><!-- .card -->
          </div><!-- .col -->

        </div><!-- .row -->
      </div><!-- .nk-block -->
    </div>
  </div>
</div>
@endsection