<aside class="main-sidebar elevation-3 rounded bg-light">
   <!-- Brand Logo -->

   <!-- Sidebar -->
   <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3  d-flex">
         <div class="image col">
            <div class="row"> <img src="{{ asset('assets/admin/uploads/'. auth()->user()->image) }}"
                  class="img-circle row" alt="User Image"></div>
            <div class="row profile-info">
               <div class="info col text-center">
                  <a href="{{ route('admin.admins_accounts.details', ['id'=>auth()->user()->id]) }}" class="d-block">
                     <h5 class="text-dark">{{auth()->user()->name }}</h5>
                     <span>{{auth()->user()->email }}</span>
                    

                  </a>
               </div>
            </div>

         </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-1">
         <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
              with font-awesome or any other icon font library -->
            <li class="nav-item">
               <a href="{{ route('admin.dashboard') }}" class="nav-link {{ !(request()->is('admin/*'))?'active':'' }}">
                  <i class="nav-icon fa fa-home"></i>
                  <p>
                     الرئيسة
                  </p>
               </a>

            </li>
            <li class="nav-item">
               <a href="{{ route('admin.itemcard.create') }}" class="nav-link {{ (request()->is('admin/itemcard/create*'))?'active':'' }}">
                  <i class="nav-icon fas fa-boxes"></i>
                  <p>
                     صنف جديد
                  </p>
               </a>

            </li>
            
            <li class="nav-item">
               <a href="{{ route('admin.SalesInvoices.index') }}" class="nav-link {{ (request()->is('admin/SalesInvoices/index*'))?'active':'' }}">
                  <i class="nav-icon fas fa-file-medical"></i>
                  <p>
                     فاتورة بيع جديدة
                  </p>
               </a>
            </li>

            <div class="divider"></div>

            <li
               class="nav-item has-treeview {{ ( (request()->is('admin/accountTypes*')||request()->is('admin/accounts*')  ||request()->is('admin/customer*')  ||request()->is('admin/suppliers_categories*') ||request()->is('admin/supplier*') ||(request()->is('admin/collect_transaction*') ||request()->is('admin/exchange_transaction*') ||request()->is('admin/delegates*') )) && !request()->is('admin/suppliers_orders*')  )?'menu-open':''  }}     ">
               <a href="#"
                  class="nav-link {{ ( (request()->is('admin/accountTypes*')||request()->is('admin/accounts*')  ||request()->is('admin/customer*')  ||request()->is('admin/suppliers_categories*') ||request()->is('admin/supplier*') ||(request()->is('admin/collect_transaction*') ||request()->is('admin/exchange_transaction*') ||request()->is('admin/delegates*'))) && !request()->is('admin/suppliers_orders*')  )?'active':''  }}">
                  <i class="nav-icon far fa-money-bill-alt text-success"></i>
                  <p>
                     الحسابات
                     <i class="right fas fa-angle-left"></i>
                  </p>
               </a>
               <ul class="nav nav-treeview">
                  <li class="nav-item">
                     <a href="{{ route('admin.accountTypes.index') }}"
                        class="nav-link {{ (request()->is('admin/accountTypes*'))?'active':'' }}">
                        <p>
                           انواع الحسابات المالية
                        </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="{{ route('admin.accounts.index') }}"
                        class="nav-link {{ (request()->is('admin/accounts*') )?'active':'' }}">
                        <p>
                           الشجرة ( الحسابات المالية )
                        </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="{{ route('admin.customer.index') }}"
                        class="nav-link {{ (request()->is('admin/customer*') )?'active':'' }}">
                        <p>
                           حسابات العملاء
                        </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="{{ route('admin.delegates.index') }}"
                        class="nav-link {{ (request()->is('admin/delegates*') )?'active':'' }}">
                        <p>
                           حسابات المناديب
                        </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="{{ route('admin.suppliers_categories.index') }}"
                        class="nav-link {{ (request()->is('admin/suppliers_categories*') )?'active':'' }}">
                        <p>
                           فئات الموردين
                        </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="{{ route('admin.supplier.index') }}"
                        class="nav-link {{ (request()->is('admin/supplier*') and !request()->is('admin/suppliers_categories*') )?'active':'' }}">
                        <p>
                           حسابات الموردين
                        </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="{{ route('admin.collect_transaction.index') }}"
                        class="nav-link {{ (request()->is('admin/collect_transaction*') )?'active':'' }}">
                        <p>
                           شاشة تحصيل النقدية
                        </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="{{ route('admin.exchange_transaction.index') }}"
                        class="nav-link {{ (request()->is('admin/exchange_transaction*') )?'active':'' }}">
                        <p>
                           شاشة صرف النقدية
                        </p>
                     </a>
                  </li>
               </ul>
            </li>
            <li
               class="nav-item has-treeview {{ ((request()->is('admin/sales_matrial_types*')||request()->is('admin/stores*') ||request()->is('admin/uoms*') ||request()->is('admin/inv_itemcard_categories*')||request()->is('admin/itemcard*'))and !request()->is('admin/itemcardBalance*')  and !request()->is('admin/stores_inventory*') )?'menu-open':'' }}     ">
               <a href="#"
                  class="nav-link {{ ((request()->is('admin/sales_matrial_types*')||request()->is('admin/stores*') ||request()->is('admin/uoms*') ||request()->is('admin/inv_itemcard_categories*')||request()->is('admin/itemcard*')  ) and !request()->is('admin/itemcardBalance*') and !request()->is('admin/stores_inventory*')  )?'active':'' }}">
                  <i class="nav-icon fas fa-store-alt text-warning"></i>
                  <p>
                     ضبط المخازن
                     <i class="right fas fa-angle-left"></i>
                  </p>
               </a>
               <ul class="nav nav-treeview">
                  <li class="nav-item">
                     <a href="{{ route('admin.sales_matrial_types.index') }}"
                        class="nav-link {{ (request()->is('admin/sales_matrial_types*') )?'active':'' }}">
                        *
                        <p>
                           بيانات فئات الفواتير
                        </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="{{ route('admin.stores.index') }}"
                        class="nav-link {{ (request()->is('admin/stores*') )?'active':'' }}">
                        *
                        <p>
                           بيانات المخازن
                        </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="{{ route('admin.uoms.index') }}"
                        class="nav-link {{ (request()->is('admin/uoms*') )?'active':'' }}">
                        *
                        <p>
                           بيانات الوحدات
                        </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="{{ route('inv_itemcard_categories.index') }}"
                        class="nav-link {{ (request()->is('admin/inv_itemcard_categories*') )?'active':'' }}">
                        *
                        <p>
                           فئات الاصناف
                        </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="{{ route('admin.itemcard.index') }}"
                        class="nav-link {{ (request()->is('admin/itemcard*') )?'active':'' }}">
                        *
                        <p>
                           الاصناف
                        </p>
                     </a>
                  </li>
               </ul>
            </li>

            <li
               class="nav-item has-treeview {{ (request()->is('admin/suppliers_orders*') ||request()->is('admin/suppliers_orders_general_return*') ||request()->is('admin/itemcardBalance*') ||request()->is('admin/stores_inventory*'))?'menu-open':'' }}     ">
               <a href="#"
                  class="nav-link {{ (request()->is('admin/suppliers_orders*') ||request()->is('admin/suppliers_orders_general_return*') ||request()->is('admin/itemcardBalance*')  ||request()->is('admin/stores_inventory*') )?'active':'' }}">
                  <i class="nav-icon far fa-chart-bar text-danger"></i>
                  <p>
                     المشتريات و المخازن
                     <i class="right fas fa-angle-left"></i>
                  </p>
               </a>
               <ul class="nav nav-treeview">
                  <li class="nav-item">
                     <a href="{{ route('admin.suppliers_orders.index') }}"
                        class="nav-link {{ (request()->is('admin/suppliers_orders*') and !request()->is('admin/suppliers_orders_general_return*') )?'active':'' }}">
                        <p>
                           فواتير المشتريات
                        </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="{{ route('admin.suppliers_orders_general_return.index') }}"
                        class="nav-link {{ (request()->is('admin/suppliers_orders_general_return*')  )?'active':'' }}">
                        <p>
                           فواتير مرتجع المشتريات العام
                        </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="{{ route('admin.stores_inventory.index') }}"
                        class="nav-link {{ (request()->is('admin/stores_inventory*')  )?'active':'' }}">
                        <p>
                           جرد المخازن
                        </p>
                     </a>
                  </li>


                  <li class="nav-item">
                     <a href="{{ route('admin.itemcardBalance.index') }}"
                        class="nav-link {{ (request()->is('admin/itemcardBalance*')  )?'active':'' }}">
                        <p>
                           أرصدة الأصناف
                        </p>
                     </a>
                  </li>
               </ul>
            </li>

            <li
               class="nav-item has-treeview {{ (request()->is('admin/SalesInvoices*') || request()->is('admin/SalesReturnInvoices*'))?'menu-open':'' }}     ">
               <a href="#"
                  class="nav-link {{ (request()->is('admin/SalesInvoices*') || request()->is('admin/SalesReturnInvoices*') )?'active':'' }}">
                  <i class="nav-icon fas fa-cart-arrow-down text-warning"></i>
                  <p>
                     المبيعات
                     <i class="right fas fa-angle-left"></i>
                  </p>
               </a>
               <ul class="nav nav-treeview">
                  <li class="nav-item">
                     <a href="{{ route('admin.SalesInvoices.index') }}"
                        class="nav-link {{ (request()->is('admin/SalesInvoices*') )?'active':'' }}">
                        <p>
                           فواتير المبيعات
                        </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="{{ route('admin.SalesReturnInvoices.index') }}"
                        class="nav-link {{ (request()->is('admin/SalesReturnInvoices*') )?'active':'' }}">
                        <p>
                           مرتجع المبيعات العام
                        </p>
                     </a>
                  </li>
               </ul>
            </li>
            <li
               class="nav-item has-treeview  {{ (request()->is('admin/Services*') ||request()->is('admin/Services_orders*'))?'menu-open':'' }}    ">
               <a href="#"
                  class="nav-link {{ (request()->is('admin/Services*') ||request()->is('admin/Services_orders*') )?'active':'' }} ">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                     الخدمات
                     <i class="right fas fa-angle-left"></i>
                  </p>
               </a>
               <ul class="nav nav-treeview  ">
                  <li class="nav-item">
                     <a href="{{ route('admin.Services.index') }}"
                        class="nav-link {{ (request()->is('admin/Services*')  and !request()->is('admin/Services_orders*'))?'active':'' }}">
                        <p>
                           ضبط الخدمات
                        </p>
                     </a>
                  </li>

                  <li class="nav-item">
                     <a href="{{ route('admin.Services_orders.index') }}"
                        class="nav-link {{ (request()->is('admin/Services_orders*')  )?'active':'' }}">
                        <p>
                           فواتير الخدمات
                        </p>
                     </a>
                  </li>
               </ul>
            </li>
            <li class="nav-item has-treeview {{ (request()->is('admin/admin_shift*'))?'menu-open':'' }}     ">
               <a href="#" class="nav-link {{ (request()->is('admin/admin_shift*') )?'active':'' }}">
                  <i class="nav-icon fas fas fa-lock text-danger"></i>
                  <p>
                   الخزنة
                     <i class="right fas fa-angle-left"></i>
                  </p>
               </a>
               <ul class="nav nav-treeview">
                  <li class="nav-item">
                     <a href="{{ route('admin.admin_shift.index') }}"
                        class="nav-link {{ (request()->is('admin/admin_shift*') )?'active':'' }}">
                        <p>
                           شفتات الخزن
                        </p>
                     </a>
                  </li>
               </ul>
            </li>
            <li class="nav-item has-treeview {{ (request()->is('admin/admins_accounts*'))?'menu-open':'' }}     ">
               <a href="#" class="nav-link {{ (request()->is('admin/admins_accounts*') )?'active':'' }}">
                  <i class="nav-icon fas fa-shield-alt text-success"></i>
                  <p>
                     الصلاحيات
                     <i class="right fas fa-angle-left"></i>
                  </p>
               </a>
               <ul class="nav nav-treeview">
                  <li class="nav-item">
                     <a href="{{ route('admin.admins_accounts.index') }}"
                        class="nav-link {{ (request()->is('admin/admins_accounts*') )?'active':'' }}">
                        <p>
                           المستخدمين
                        </p>
                     </a>
                  </li>
               </ul>
            </li>
            <li
               class="nav-item has-treeview {{ (request()->is('admin/FinancialReport*') || request()->is('admin/customeraccountmirror*') ||request()->is('admin/FinancialReport/delegateaccountmirror') )?'menu-open':'' }}     ">
               <a href="#"
                  class="nav-link {{ (request()->is('admin/FinancialReport*') || request()->is('admin/customeraccountmirror*') ||request()->is('admin/FinancialReport/delegateaccountmirror') )?'active':'' }}">
                  <i class="nav-icon fas fa-file-alt text-info"></i>
                  <p>
                     التقارير
                     <i class="right fas fa-angle-left"></i>
                  </p>
               </a>
               <ul class="nav nav-treeview">
                  <li class="nav-item">
                     <a href="{{ route('admin.FinancialReport.supplieraccountmirror') }}"
                        class="nav-link {{ (request()->is('admin/FinancialReport/supplieraccountmirror') )?'active':'' }}">
                        <p>
                           كشف حساب مورد
                        </p>
                     </a>
                  </li>

                  <li class="nav-item">
                     <a href="{{ route('admin.FinancialReport.customeraccountmirror') }}"
                        class="nav-link {{ (request()->is('admin/FinancialReport/customeraccountmirror') )?'active':'' }}">
                        <p>
                           كشف حساب عميل
                        </p>
                     </a>
                  </li>


                  <li class="nav-item">
                     <a href="{{ route('admin.FinancialReport.delegateaccountmirror') }}"
                        class="nav-link {{ (request()->is('admin/FinancialReport/delegateaccountmirror') )?'active':'' }}">
                        <p>
                           كشف حساب مندوب
                        </p>
                     </a>
                  </li>

               </ul>
            </li>
            <li
            class="nav-item has-treeview {{ (request()->is('admin/adminpanelsetting*')||request()->is('admin/treasuries*') )?'menu-open':'' }}     ">
            <a href="#"
               class="nav-link {{ (request()->is('admin/adminpanelsetting*')||request()->is('admin/treasuries*') )?'active':'' }}">
               <i class="nav-icon fa fa-cog text-primary"></i>
               <p>
                  الإعدادات
                  <i class="right fas fa-angle-left"></i>
               </p>
            </a>
            <ul class="nav nav-treeview">
               <li class="nav-item">
                  <a href="{{ route('admin.adminPanelSetting.index') }}"
                     class="nav-link {{ (request()->is('admin/adminpanelsetting*')) ?'active':'' }}">
                     <p>الضبط العام</p>
                  </a>
               </li>
               <li class="nav-item">
                  <a href="{{ route('admin.treasuries.index') }}"
                     class="nav-link {{ (request()->is('admin/treasuries*') )?'active':'' }}">
                     <p>بيانات الخزن</p>
                  </a>
               </li>
            </ul>
         </li>
            <li class="nav-item has-treeview">
               <a href="#" class="nav-link ">
                  <i class="nav-icon fas fa-cloud-download-alt text-primary"></i>
                  <p>
                     نسخ إحتياطي
                     <i class="right fas fa-angle-left"></i>
                  </p>
               </a>
               <ul class="nav nav-treeview">
               </ul>
            </li>
            <li class="nav-item mx-3 logout">
               <a href="#" class="nav-link bg-danger">
                  <i class="nav-icon fas fa-sign-out-alt"></i>
                    تسجيل خروج
               </a>
               <ul class="nav nav-treeview">
               </ul>
            </li>
         </ul>
      </nav>
      <!-- /.sidebar-menu -->
   </div>
   <!-- /.sidebar -->
</aside>