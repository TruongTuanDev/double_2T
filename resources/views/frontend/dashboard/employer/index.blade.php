@include('frontend.dashboard.components.breadcrumb',['title' => $config['seo']['index']['title']]);
<div class="row mt20">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>{{$config['seo']['index']['table']; }}</h5>
                @include('frontend.employer.components.toolbox')
            </div>
            <div class="ibox-content">
            @include('frontend.employer.components.filter')
            @include('frontend.employer.components.table');
            </div>
        </div>
      </div>
</div>

