<div class="main-content">
          <div class="breadcrumbs" id="breadcrumbs">
            <script type="text/javascript">
              try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
            </script>

            <ul class="breadcrumb">
              <li>
                <i class="icon-home home-icon"></i>
                <a href="<?php echo base_url('/index.php');?>">Home</a>
              </li>
              <li class="active"><?php echo lang('alta_profes');?></li>
            </ul><!-- .breadcrumb -->

            <div class="nav-search" id="nav-search">
              <form class="form-search">
                <span class="input-icon">
                  <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
                  <i class="icon-search nav-search-icon"></i>
                </span>
              </form>
            </div><!-- #nav-search -->
          </div>

          <div class="page-content">
            <div class="page-header">
              <h1>
               Datatables
                <small>
                  <i class="icon-double-angle-right"></i>
                 Datatables
                </small>
              </h1>
            </div><!--FIN BARRAS SUPERIORES-->

            <table id="table1" class="display dataTable" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" style="width: 100%;">
              <thead>
                <tr>
                  <th>
                    Name
                  </th>
                  <th>
                  Lastname
                  </th>
                  <th>
                  Address1
                  </th>
                  <th >
                  Address2
                  </th>
                  <th>
                  Age
                  </th>
                  <th>
                  Phone
                  </th>
                  </tr>
                  </thead>
                  <tfoot>
                  <tr>
                  <th>Name</th>
                  <th>Lastname</th> 
                  <th>Address1</th>
                  <th>Address2</th>
                  <th>Age</th>
                  <th>Phone</th>
                </tr>
              </tfoot>
              <tbody>
                <tr>
                  <td>Carlos</td>
                  <td>Ramirez</td>
                  <td>loquesea</td>
                  <td>loquesea2</td>
                  <td>45</td>
                  <td>6789045678</td>
                </tr>
                <tr>
                  <td>Angelica</td>
                  <td>Perez</td>
                  <td>sucasa1</td>
                  <td>sucasa2</td>
                  <td>34</td>
                  <td>87609875</td>
                  </tr>
                  <tr>
                  <td>Azazel</td>
                  <td>Inferno</td>
                  <td>Submundo1</td>
                  <td>Submundo2</td>
                  <td>540</td>
                  <td>5467895674</td>
                  </tr>
                  <tr>
                    <td>Mefistofeles</td>
                    <td>Infernalia</td>
                    <td>Inframundo1</td>
                      <td>Inframundo2</td>
                      <td>2000</td>
                      <td>4546478666</td>
                      </tr>
                    </tbody>
                  </table>
                  <script type="text/javascript">
                  $(document).ready(function() {
                      $('#table1').dataTable();
                  } );

                  </script>














































          </div><!--page content-->