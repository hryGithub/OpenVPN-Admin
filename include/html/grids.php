<ul class="nav nav-tabs">
   <li class="active"><a data-toggle="tab" href="#menu0">用户管理</a></li>
   <li><a data-toggle="tab" href="#menu1">日志查询</a></li>
   <li><a data-toggle="tab" href="#menu2">管理员</a></li>
</ul>
<div class="tab-content">
   <div id="menu0" class="tab-pane fade in active">
      <!-- Users grid -->
      <div class="block-grid row" id="user-grid">
         <h4>
            用户管理 <button data-toggle="modal" data-target="#modal-user-add" type="button" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-plus"></span></button>
         </h4>
         <table id="table-users" class="table"></table>

         <div id="modal-user-add" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
               <div class="modal-content">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                     <h4 class="modal-title">添加用户</h4>
                  </div>
                  <div class="modal-body">
                     <div class="form-group">
                        <label for="modal-user-add-username">用户名</label>
                        <input type="text" name="username" id="modal-user-add-username" class="form-control" autofocus/>
                     </div>
                     <div class="form-group">
                        <label for="modal-user-add-password">密码</label>
                        <input type="password" name="password" id="modal-user-add-password" class="form-control" />
                     </div>
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                     <button type="button" class="btn btn-primary" id="modal-user-add-save">保存</button>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div id="menu1" class="tab-pane fade">
      <!-- Logs grid -->
      <div class="block-grid row" id="log-grid">
         <h4>
            日志查询
         </h4>
         <table id="table-logs" class="table"></table>
      </div>
   </div>

   <div id="menu2" class="tab-pane fade">
      <!-- Admins grid -->
      <div class="block-grid row" id="admin-grid">
         <h4>
            管理员 <button data-toggle="modal" data-target="#modal-admin-add" type="button" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-plus"></span></button>
         </h4>
         <table id="table-admins" class="table"></table>

         <div id="modal-admin-add" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
               <div class="modal-content">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                     <h4 class="modal-title">添加管理员</h4>
                  </div>
                  <div class="modal-body">
                     <div class="form-group">
                        <label for="modal-admin-add-username">用户名</label>
                        <input type="text" name="username" id="modal-admin-add-username" class="form-control" autofocus/>
                     </div>
                     <div class="form-group">
                        <label for="modal-admin-add-password">密码</label>
                        <input type="password" name="password" id="modal-admin-add-password" class="form-control" />
                     </div>
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                     <button type="button" class="btn btn-primary" id="modal-admin-add-save">保存</button>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<script src="vendor/jquery/dist/jquery.min.js"></script>
<script src="vendor/bootstrap/js/modal.js"></script>
<script src="vendor/bootstrap/js/tooltip.js"></script>
<script src="vendor/bootstrap/js/tab.js"></script>
<script src="vendor/bootstrap/js/popover.js"></script>
<script src="vendor/bootstrap-table/dist/bootstrap-table.min.js"></script>
<script src="vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.js"></script>
<script src="vendor/bootstrap-table/dist/extensions/editable/bootstrap-table-editable.min.js"></script>
<script src="vendor/x-editable/dist/bootstrap3-editable/js/bootstrap-editable.js"></script>
<script src="js/grids.js"></script>
