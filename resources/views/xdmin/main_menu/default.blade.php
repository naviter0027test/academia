<ul class="page-sidebar-menu  " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" >
    <li class="nav-item start <?php if (isset($elfinder)) echo 'active open'; ?>">
        <a href="/xdmin/elfinder" class="nav-link nav-toggle">
            <i class="fa fa-align-justify"></i>
            <span class="title">多媒體上傳</span>
        </a>
    </li>
    <li class="nav-item start <?php if (isset($pageSetting)) echo 'active open'; ?>">
        <a href="/xdmin/pageSetting" class="nav-link nav-toggle">
            <i class="fa fa-plus"></i>
            <span class="title">首頁資訊管理</span>
        </a>
    </li>
    <li class="nav-item start <?php if (isset($manager)) echo 'active open'; ?>">
        <a href="/xdmin/manager" class="nav-link nav-toggle">
            <i class="fa fa-plus"></i>
            <span class="title">帳號管理</span>
        </a>
    </li>
	  <li class="nav-item start <?php if (isset($users)) echo 'active open'; ?>">
        <a href="/xdmin/user" class="nav-link nav-toggle">
            <i class="fa fa-plus"></i>
            <span class="title">會員管理</span>
        </a>
    </li>
    <li class="nav-item start <?php if (isset($banner)) echo 'active open'; ?>">
        <a href="/xdmin/banner" class="nav-link nav-toggle">
            <i class="fa fa-align-justify"></i>
            <span class="title">Banner管理</span>
        </a>
    </li>

    <li class="nav-item start <?php if (isset($news)) echo 'active open'; ?>">
        <a href="/xdmin/news" class="nav-link nav-toggle">
            <i class="fa fa-align-justify"></i>
            <span class="title">最新消息</span>
        </a>
    </li>
    <li class="nav-item  <?php if (isset($product)) echo 'active open'; ?>">
        <a href="javascript:;" class="nav-link nav-toggle">
            <i class="fa fa-group"></i>
            <span class="title">商品</span>
            <span class="arrow"></span>
        </a>
        <ul class="sub-menu">
            <li class="nav-item <?php if(isset($p1)) echo 'active open'; ?>">
                <a href="/xdmin/psubmenu" class="nav-link nav-toggle">
                    <i class="fa fa-plus"></i>
                    <span>商品分類選單</span>
                </a>
            </li>
            <li class="nav-item <?php if (isset($p3)) echo 'active open'; ?>">
                <a href="/xdmin/productStyle" class="nav-link nav-toggle">
                    <i class="fa fa-plus"></i>
                    <span class="title">商品樣式維護</span>
                </a>
            </li>
            <li class="nav-item <?php if (isset($p2)) echo 'active open'; ?>">
                <a href="/xdmin/product" class="nav-link nav-toggle">
                    <i class="fa fa-plus"></i>
                    <span class="title">商品維護</span>
                </a>
            </li>

        </ul>
    </li>
    <li class="nav-item start <?php if (isset($order)) echo 'active open'; ?>">
        <a href="/xdmin/order" class="nav-link nav-toggle">
            <i class="fa fa-plus"></i>
            <span class="title">訂單管理</span>
        </a>
    </li>
    <li class="nav-item <?php if (isset($s1) && ($data->id == 1 || $data->id == 2 || $data->id == 3)) echo 'active open'; ?>">
        <a href="javascript:;" class="nav-link nav-toggle">

            <i class="fa fa-square"></i>
            <span class="title">中心簡介</span>
            <span class="arrow"></span>
        </a>
        <ul class="sub-menu">
            <li class="nav-item start <?php if (isset($s1) && ($data->id == 1)) echo 'active open'; ?>">
                <a href="/xdmin/content1/1" class="nav-link ">
                    <span class="title">關於我們</span>
                </a>
            </li>
            <li class="nav-item start <?php if (isset($s1) && ($data->id == 2)) echo 'active open'; ?>">
                <a href="/xdmin/content1/2" class="nav-link ">
                    <span class="title">組織架構</span>
                </a>
            </li>
            <li class="nav-item start <?php if (isset($s1) && ($data->id == 3)) echo 'active open'; ?>">
                <a href="/xdmin/content1/3" class="nav-link ">
                    <span class="title">服務項目</span>
                </a>
            </li>
        </ul>
    </li>
    <li class="nav-item <?php if (isset($s1) && ($data->id == 4 || $data->id == 5 || $data->id == 6 || $data->id == 7) ) echo 'active open'; ?>">
        <a href="javascript:;" class="nav-link nav-toggle">
            <i class="fa fa-square"></i>
            <span class="title">合作機會</span>

            <span class="arrow"></span>
        </a>
        <ul class="sub-menu">
		 <li class="nav-item">
		<a href="/xdmin/content1/8" class="nav-link ">
					<i class="icon-settings"></i> 合作關係
                    
                </a>
				</li>
            <li class="nav-item">
				<a href="javascript:;" class="nav-link nav-toggle">
					<i class="icon-settings"></i> 專利申請
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
					<li class="nav-item">
						<a href="/xdmin/content1/4" class="nav-link">
							<i class="fa fa-plus"></i> 專利申請程序
						</a>
                    </li>
                    <li class="nav-item">
                        <a href="/xdmin/dydoc" class="nav-link">
							<i class="fa fa-plus"></i> 持有專利彙編
						</a>
                    </li> 
                    <li class="nav-item">
						<a href="/xdmin/content1/9" class="nav-link">
							<i class="fa fa-plus"></i> 申請專利相關文件下載
						</a>
                    </li>
                </ul>
            </li>
			<li class="nav-item">
				<a href="javascript:;" class="nav-link nav-toggle">
					<i class="icon-settings"></i> 技術轉移
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
					<li class="nav-item">
						<a href="/xdmin/content1/5" class="nav-link">
							<i class="fa fa-plus"></i> 技術轉移簡介
						</a>
                    </li>
                    <li class="nav-item">
                        <a href="/xdmin/content1/10" class="nav-link">
							<i class="fa fa-plus"></i> 申請技轉相關法規
						</a>
                    </li>
                </ul>
            </li>
			 <li class="nav-item">
				<a href="javascript:;" class="nav-link nav-toggle">
					<i class="icon-settings"></i> 創新育成
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
				
                    <li class="nav-item">
                        <a href="/xdmin/content1/6" class="nav-link">
							<i class="fa fa-plus"></i> 育成中心簡介
						</a>
                    </li>
                <li class="nav-item">
						<a href="/xdmin/content1/11" class="nav-link">
							<i class="fa fa-plus"></i> 申請進駐相關法規及文件下載
						</a>
                    </li>
				</ul>
            </li>
			 <li class="nav-item">
				<a href="javascript:;" class="nav-link nav-toggle">
					<i class="icon-settings"></i> 研發合作
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
					<li class="nav-item">
						<a href="/xdmin/content1/7" class="nav-link">
							<i class="fa fa-plus"></i> 合作案例簡介
						</a>
                    </li>
                    <li class="nav-item">
                        <a href="/xdmin/content1/14" class="nav-link">
							<i class="fa fa-plus"></i> 合作案例
						</a>
                    </li>
                </ul>
            </li>
        </ul>
		 
		
    </li>
</ul>

 

