@extend('backend::public.layout')
@section('content')
<!-- BEGIN CONTENT BODY -->
{!! csrf_field() !!}
<div class="page-content">
	<!-- BEGIN PAGE BAR -->
	<div class="page-bar">
		<ul class="page-breadcrumb">
			<li> <a href="<?= $param['uri']['module'] ?>">首页</a> <i class="fa fa-circle"></i> </li>
			<li> <span><?= $param['pageTitle'] ?></span> </li>
		</ul>
	</div>
	<!-- END PAGE BAR -->

	<div class="row" style="margin-top: 16px">
		<!-- Main Portlet Start -->
		<div class="portlet light bordered" id="tablePortlet">
			<div class="portlet-title">
				<div class="caption">
					<i class="icon-settings"></i>
					<span class="caption-subject uppercase"><?= $param['pageTitle'] ?></span>
				</div>
				<div class="actions">
					<a href="javascript:;" class="btn btn-circle blue" id="addNewBtn">
					  <i class="fa fa-plus"></i> 新增
					</a>
					<a href="javascript:;" class="btn btn-circle red" id="destroySelectBtn">
						<i class="fa fa-trash"></i> 删除
					</a>
				</div>
			</div>
			<div class="portlet-body">
				<!-- Start Search Form -->
				<form class="form-inline" id="searchForm">
					<!-- 查询关键字 start -->
					<div class="form-group">
						<label>关键字: </label>
						<input type="text" class="form-control" name="keyword" placeholder="查询关键字">
					</div>
					<!-- 查询关键字 end -->
					<!-- 查询状态 start -->
					<div class="form-group">
						<label>状态: </label>
						<select class="form-control" name="status">
							<option selected="" value="">不限</option>
							<?= form_options($param['status']) ?>
						</select>
					</div>
					<!-- 查询状态 end -->
					<button type="submit" class="btn default" id="searchBtn"><i class="fa fa-search"></i> 查询</button>
				</form> <!-- End Search Form -->

        <div class="table-scrollable">
  <table id="dataGrid" class="table table-hover">
    <tr>
      <th width="40" data-field="id" ></th>
<th width="80" data-field="device" ></th>
<th width="80" data-field="device_os_version" ></th>
<th width="80" data-field="app_version" ></th>
<th width="80" data-field="api_version" ></th>
<th width="80" data-field="uri" ></th>
<th width="80" data-field="ip" ></th>
<th width="180" data-field="created_at" data-formatter="formatDatetime"></th>

      <th width="60" data-formatter="optEdit"></th>
      <th width="60" data-formatter="optDelete"></th>
      <th>&nbsp;</th>
    </tr>
  </table>
</div>
        

			</div>
		</div> <!-- Main Portlet Start -->

		<!-- BEGIN ADD EDIT PORTLET -->
<div class="portlet box green-meadow" id="addEditPortlet" style="display: none;">
  <div class="portlet-title">
    <div class="caption caption-md">
      <i class="icon-settings"></i>
      <span class="caption-subject uppercase"></span>
    </div>
  </div>
  <div class="portlet-body">
    <!-- start add edit form  -->
    <div class="row">
      <div class="col-md-12">
        <!-- start form -->
        <form id="addEditForm" class="form-horizontal">
          <div class="form-body">
            <!-- start item -->
<div class="form-group">
	<label class="col-md-3 control-label"></label>
	<div class="col-md-7">
    <input type="text" name="device" placeholder="" class="form-control"
           data-valid="required" data-tips="请输入正确的" >
	</div>
</div><!-- end item -->
<!-- start item -->
<div class="form-group">
	<label class="col-md-3 control-label"></label>
	<div class="col-md-7">
    <input type="text" name="device_os_version" placeholder="" class="form-control"
           data-valid="required" data-tips="请输入正确的" >
	</div>
</div><!-- end item -->
<!-- start item -->
<div class="form-group">
	<label class="col-md-3 control-label"></label>
	<div class="col-md-7">
    <input type="text" name="app_version" placeholder="" class="form-control"
           data-valid="required" data-tips="请输入正确的" >
	</div>
</div><!-- end item -->
<!-- start item -->
<div class="form-group">
	<label class="col-md-3 control-label"></label>
	<div class="col-md-7">
    <input type="text" name="api_version" placeholder="" class="form-control"
           data-valid="required" data-tips="请输入正确的" >
	</div>
</div><!-- end item -->
<!-- start item -->
<div class="form-group">
	<label class="col-md-3 control-label"></label>
	<div class="col-md-7">
    <input type="text" name="uri" placeholder="" class="form-control"
           data-valid="required" data-tips="请输入正确的" >
	</div>
</div><!-- end item -->
<!-- start item -->
<div class="form-group">
	<label class="col-md-3 control-label"></label>
	<div class="col-md-7">
    <input type="text" name="ip" placeholder="" class="form-control"
           data-valid="required" data-tips="请输入正确的" >
	</div>
</div><!-- end item -->

          </div>
          <div class="form-actions" style="margin-bottom: 60px;">
            <hr>
            <div class="row">
              <div class="col-md-offset-3 col-md-7">
                <button class="btn default btn-lg" id="closePortletBtn" type="button" ><i class="fa fa-arrow-left"></i> 返回</button>
                <button class="btn red btn-lg" id="submitFormBtn" type="button"><i class="fa fa-check"></i> 提交</button>
              </div>
            </div>
          </div>
        </form><!-- END ADD EDIT FORM -->
      </div>
    </div>
	</div><!-- END ADD EDIT PORTLET BODY -->
</div><!-- END ADD EDIT PORTLET  -->

	</div>
</div>


<!-- END CONTENT BODY -->
@stop