<h1>海生館訂單通知</h1>
<br/>
<head>
<style>
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
</style>
</head>
<h1>姓名:{{$user->name2}}</h1>
<br/>
<h1>E-mail:{{$user->email2}}</h1>
<br/>
<h1>連絡電話:{{$user->mobile2}}</h1>
<br/>
<h1>地址:{{$user->addrress2}}</h1>
<br/>
<h1>購買品項</h1>
<br/>
<h2>
 <table  id="customers">
                                            <thead>
                                            <tr>
                                                <th>商品名稱</th>
                                                <th>價格</th>
                                                <th>數量</th>
                                                <th>小計</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            $cc = 0;
                                            ?>
                                            @foreach($detail as $item)
                                                <tr>
                                                    <td>{{$item->productName}}</td>
                                                    <td>${{$item->price}}元</td>
                                                    <td>{{$item->amount}}</td>
                                                    <td><?php
                                                        $cc += $item->amount * $item->price;
                                                        echo $item->amount * $item->price;
                                                        ?></td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <td colspan="3">商品小計</td>
                                                <td>{{$cc}}</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3">+運費</td>
                                                <td><?php
                                                    if($cc < 1500) {
                                                        echo '80';
                                                        $cc+=80;
                                                    }
                                                    ?></td>
                                            </tr>
                                            <tr>
                                                <td colspan="3">總金額</td>
                                                <td>$
                                                    <?php
                                                        echo $cc;
                                                    ?>
                                                    元</td>
                                            </tr>
                                            </tfoot>
                                        </table>

</h2>
<br/>

<h2>
@if($user->ot == 'atm')
	訂單編號:{{$code}}
											<ul>
												
匯款帳戶如下<br/>
--------------------------------------------------<br/>
第一銀行恆春分行<br/>
戶名 : 國立海洋生物博物館作業基金401專戶<br/>
帳號 : 75330530267<br/>
--------------------------------------------------<br/>
匯款完畢後於「聯絡我們」回覆以下資料，款項確認後為您出貨~<br/>


<li>1.帳號後五碼</li>
<li>2.匯款日期</li>
<li>3.匯款金額</li>

												</ul>
												</h2>
@endif
