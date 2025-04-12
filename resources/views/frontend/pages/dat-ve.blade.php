@extends('frontend.layouts.master')
@section('title', 'Đặt vé xem phim')
@section('main')
    <style>
        /* width */
        .list-seat::-webkit-scrollbar:horizontal {
            width: 5px;
        }

        /* Track */
        .list-seat::-webkit-scrollbar-track:horizontal {
            background: #f1f1f1;
        }

        /* Handle */
        .list-seat::-webkit-scrollbar-thumb:horizontal {
            background: #333;
        }

        /* Handle on hover */
        .list-seat::-webkit-scrollbar-thumb:hover {
            background: #555;
        }

        .list-seat .android-font {
            font-size: 0.8em !important;
        }

        .list-seat .windows-font {
            font-size: 0.9em !important;
        }

        .list-seat p {
            font-weight: bold;
        }

        .note-color {
            width: 100%;
        }

        .note-color .note-col {
            width: 48%;
            padding: 2px;
            float: left;
            text-align: left;
        }

        .note-color .note-col p {
            float: left;
            padding: 3px;
            line-height: 15px;
            color: #333;
            /**/
        }

        .current_select {
            background: url(content/img/seat-selected.png) !important;
            background-size: contain !important;
            color: #fff !important;
            font-weight: bold;
        }

        .screen-thumb {
            width: 100%;
            max-width: 692px;
            margin: 0 auto 30px;
            padding-top: 20px;
        }

        h4.screen {
            font-size: 28px;
            margin: 0px auto 15px;
            position: relative;
            text-align: center;
            max-width: 350px;
            font-weight: 600;
            text-transform: uppercase;
            padding: 10px;
            color: #fff;
        }
    </style>
    <section class="filmoja-breadcrumb-area section_15 container"
        style="background: #22272b; max-width: 100% !important; border-bottom: 0.1px solid #fff; ">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-box">
                        <h2>Bước 1: Chọn ghế</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="feature-section padding-top-20 padding-bottom-5 container"
        style="background: #22272b; max-width: 100% !important; overflow-x: auto; ">




        <div class="list-seat" style="margin: 0 auto; width: 630px; position: relative; height: auto; ">

            <div class="screen-thumb">
                <h4 class="screen">Màn hình</h4>
                <img src="Content/img/screen-thumb.png" alt="movie">
            </div>
            <div class="clearfix row" style="position: relative; display: flex; justify-content: center;">
                <p style="margin: 3px; width: 35px; height: 35px; background: url(content/img/seat-standard.png); background-size: contain; color: #333; text-align: center; float: left; font-size: 0.6rem; line-height: 35px; letter-spacing: 0.5px; cursor: pointer; "
                    onclick="onClickSelect(this,1108371039,'2l5YDi6MfGe3AzC0jz3ZYAggz11U9QTqahxZr8tCGaA=','0','A')">A12</p>
                <p style="margin: 3px; width: 35px; height: 35px; background: url(content/img/seat-standard.png); background-size: contain; color: #333; text-align: center; float: left; font-size: 0.6rem; line-height: 35px; letter-spacing: 0.5px; cursor: pointer; "
                    onclick="onClickSelect(this,1108371040,'2qJI8yo6BJK1QQSyhcsAP7l8RH0SA+oV7Utzjv9fNLk=','0','A')">A11</p>
                <p style="margin: 3px; width: 35px; height: 35px; background: url(content/img/seat-standard.png); background-size: contain; color: #333; text-align: center; float: left; font-size: 0.6rem; line-height: 35px; letter-spacing: 0.5px; cursor: pointer; "
                    onclick="onClickSelect(this,1108371041,'x5sEGV8m1Rd1PsZcZri4OD1unXffTFSpS60LAEwZ1FQ=','0','A')">A10</p>
                <p style="margin: 3px; width: 35px; height: 35px; background: url(content/img/seat-standard.png); background-size: contain; color: #333; text-align: center; float: left; font-size: 0.6rem; line-height: 35px; letter-spacing: 0.5px; cursor: pointer; "
                    onclick="onClickSelect(this,1108371042,'9L/hZlqq2pGpNMT7UpHxI8u8L32gkEQlxKAkhDz3tEg=','0','A')">A09</p>
                <p style="margin: 3px; width: 35px; height: 35px; background: url(content/img/seat-standard.png); background-size: contain; color: #333; text-align: center; float: left; font-size: 0.6rem; line-height: 35px; letter-spacing: 0.5px; cursor: pointer; "
                    onclick="onClickSelect(this,1108371043,'xdLGGnM5w0JZtGJnUSu+7QUAu+5KaTKvQa76DbvmqMI=','0','A')">A08</p>
                <p style="margin: 3px; width: 35px; height: 35px; background: url(content/img/seat-standard.png); background-size: contain; color: #333; text-align: center; float: left; font-size: 0.6rem; line-height: 35px; letter-spacing: 0.5px; cursor: pointer; "
                    onclick="onClickSelect(this,1108371044,'Hh0U23rAO5ATvoww0g1Chu3OQPKm5RcajpNQRbc6xzo=','0','A')">A07</p>
                <p style="margin: 3px; width: 35px; height: 35px; background: url(content/img/seat-standard.png); background-size: contain; color: #333; text-align: center; float: left; font-size: 0.6rem; line-height: 35px; letter-spacing: 0.5px; cursor: pointer; "
                    onclick="onClickSelect(this,1108371045,'bBA0VMkNw1Cz291QYMIS5Gf0TyYpl+VmMlcbViMINpA=','0','A')">A06</p>
                <p style="margin: 3px; width: 35px; height: 35px; background: url(content/img/seat-standard.png); background-size: contain; color: #333; text-align: center; float: left; font-size: 0.6rem; line-height: 35px; letter-spacing: 0.5px; cursor: pointer; "
                    onclick="onClickSelect(this,1108371046,'bkETc2Po1lU/1/6yxpZkXUbX38L5zkZ1NbykmXsFaD4=','0','A')">A05</p>
                <p style="margin: 3px; width: 35px; height: 35px; background: url(content/img/seat-standard.png); background-size: contain; color: #333; text-align: center; float: left; font-size: 0.6rem; line-height: 35px; letter-spacing: 0.5px; cursor: pointer; "
                    onclick="onClickSelect(this,1108371047,'1onVNdCEoqab/mo+Jb6aDAfuYSVJgdnd55Q37dnPJyg=','0','A')">A04</p>
                <p style="margin: 3px; width: 35px; height: 35px; background: url(content/img/seat-standard.png); background-size: contain; color: #333; text-align: center; float: left; font-size: 0.6rem; line-height: 35px; letter-spacing: 0.5px; cursor: pointer; "
                    onclick="onClickSelect(this,1108371048,'aqSwZnfsCKWgESQvzid6rEsmvBY9LWcVSOAUn6yuXbk=','0','A')">A03</p>
                <p style="margin:3px;width:35px;height:35px;background-color:transparent;"></p>
                <p style="margin:3px;width:35px;height:35px;background-color:transparent;"></p>
                <p style="margin: 3px; width: 35px; height: 35px; background: url(content/img/seat-standard.png); background-size: contain; color: #333; text-align: center; float: left; font-size: 0.6rem; line-height: 35px; letter-spacing: 0.5px; cursor: pointer; "
                    onclick="onClickSelect(this,1108371049,'X5GXT2LaV8PYgeJmuRsBJDoW/9qLFPxO10tbMhboGgQ=','0','A')">A02</p>
                <p style="margin: 3px; width: 35px; height: 35px; background: url(content/img/seat-standard.png); background-size: contain; color: #333; text-align: center; float: left; font-size: 0.6rem; line-height: 35px; letter-spacing: 0.5px; cursor: pointer; "
                    onclick="onClickSelect(this,1108371050,'I/cw1kJz1opwPdSzLuNXzh31r1BV/kpdWteJSBfh1jU=','0','A')">A01</p>
            </div>
            <div class="clearfix row" style="position: relative; display: flex; justify-content: center;">
                <p style="margin: 3px; width: 35px; height: 35px; background: url(content/img/seat-standard.png); background-size: contain; color: #333; text-align: center; float: left; font-size: 0.6rem; line-height: 35px; letter-spacing: 0.5px; cursor: pointer; "
                    onclick="onClickSelect(this,1108371052,'zrsq6Xm8we66Jj9C/hyI97bdCEqyO4aG1sIOFdonnyk=','0','B')">B12</p>
                <p style="margin: 3px; width: 35px; height: 35px; background: url(content/img/seat-standard.png); background-size: contain; color: #333; text-align: center; float: left; font-size: 0.6rem; line-height: 35px; letter-spacing: 0.5px; cursor: pointer; "
                    onclick="onClickSelect(this,1108371053,'lCHvMei3zM8Sjav/Rh/syMf0pUaeKdYwq4cHV+00EFM=','0','B')">B11</p>
                <p style="margin: 3px; width: 35px; height: 35px; background: url(content/img/seat-standard.png); background-size: contain; color: #333; text-align: center; float: left; font-size: 0.6rem; line-height: 35px; letter-spacing: 0.5px; cursor: pointer; "
                    onclick="onClickSelect(this,1108371054,'fDzpqoy5oqvnjPu+gMncONyd9EkIBs/ojdot1A0lR9U=','0','B')">B10</p>
                <p style="margin: 3px; width: 35px; height: 35px; background: url(content/img/seat-standard.png); background-size: contain; color: #333; text-align: center; float: left; font-size: 0.6rem; line-height: 35px; letter-spacing: 0.5px; cursor: pointer; "
                    onclick="onClickSelect(this,1108371055,'STA2/0HfEgGmaAXy3c9QwlaAB1a9mYMSnX11w+crVWE=','0','B')">B09</p>
                <p style="margin: 3px; width: 35px; height: 35px; background: url(content/img/seat-standard.png); background-size: contain; color: #333; text-align: center; float: left; font-size: 0.6rem; line-height: 35px; letter-spacing: 0.5px; cursor: pointer; "
                    onclick="onClickSelect(this,1108371056,'dFc3tw7wUZmcDxvUVaA1vM+ELChmD7nGW4Q5YM57Fgw=','0','B')">B08</p>
                <p style="margin: 3px; width: 35px; height: 35px; background: url(content/img/seat-standard.png); background-size: contain; color: #333; text-align: center; float: left; font-size: 0.6rem; line-height: 35px; letter-spacing: 0.5px; cursor: pointer; "
                    onclick="onClickSelect(this,1108371057,'ivmP2z/e4kuFHhGZqPFTCnxHNCHmMNPOWKDMckvvNB0=','0','B')">B07</p>
                <p style="margin: 3px; width: 35px; height: 35px; background: url(content/img/seat-standard.png); background-size: contain; color: #333; text-align: center; float: left; font-size: 0.6rem; line-height: 35px; letter-spacing: 0.5px; cursor: pointer; "
                    onclick="onClickSelect(this,1108371058,'LrJ0ROZgEfdgVml5WKb38/QqL6JLMPr5yWh3IREui3E=','0','B')">B06</p>
                <p style="margin: 3px; width: 35px; height: 35px; background: url(content/img/seat-standard.png); background-size: contain; color: #333; text-align: center; float: left; font-size: 0.6rem; line-height: 35px; letter-spacing: 0.5px; cursor: pointer; "
                    onclick="onClickSelect(this,1108371059,'1vC2EkXiTQ7RO0D5AJ2on28+90IJn30sUuUQEarEMGI=','0','B')">B05</p>
                <p style="margin: 3px; width: 35px; height: 35px; background: url(content/img/seat-standard.png); background-size: contain; color: #333; text-align: center; float: left; font-size: 0.6rem; line-height: 35px; letter-spacing: 0.5px; cursor: pointer; "
                    onclick="onClickSelect(this,1108371060,'xB0rENtcKVRYmGInT1e0Mcml97f/08LGHdOlZdYdxH4=','0','B')">B04</p>
                <p style="margin: 3px; width: 35px; height: 35px; background: url(content/img/seat-standard.png); background-size: contain; color: #333; text-align: center; float: left; font-size: 0.6rem; line-height: 35px; letter-spacing: 0.5px; cursor: pointer; "
                    onclick="onClickSelect(this,1108371061,'E/UHPqsIy1Oc6F9BYNNcrUCOOk8Q3XuW17dPufOPRKU=','0','B')">B03</p>
                <p style="margin:3px;width:35px;height:35px;background-color:transparent;"></p>
                <p style="margin:3px;width:35px;height:35px;background-color:transparent;"></p>
                <p style="margin: 3px; width: 35px; height: 35px; background: url(content/img/seat-standard.png); background-size: contain; color: #333; text-align: center; float: left; font-size: 0.6rem; line-height: 35px; letter-spacing: 0.5px; cursor: pointer; "
                    onclick="onClickSelect(this,1108371062,'bqEe1Cw59XAFd9TYd6GhN+o/baEr6cn7BXkRtA5FHDQ=','0','B')">B02</p>
                <p style="margin: 3px; width: 35px; height: 35px; background: url(content/img/seat-standard.png); background-size: contain; color: #333; text-align: center; float: left; font-size: 0.6rem; line-height: 35px; letter-spacing: 0.5px; cursor: pointer; "
                    onclick="onClickSelect(this,1108371063,'SmEp7FyPnt06H+9UC3kjUcsnueXWQeSjcdgXENdua00=','0','B')">B01</p>
            </div>
            <div class="clearfix row" style="position: relative; display: flex; justify-content: center;">
                <p style="margin: 3px; width: 35px; height: 35px; background: url(content/img/seat-standard.png); background-size: contain; color: #333; text-align: center; float: left; font-size: 0.6rem; line-height: 35px; letter-spacing: 0.5px; cursor: pointer; "
                    onclick="onClickSelect(this,1108371065,'YuBTEicJEK6V4i1XQy/DKTWzSH05plwoxyrapZzk3HI=','0','C')">C12</p>
                <p style="margin: 3px; width: 35px; height: 35px; background: url(content/img/seat-standard.png); background-size: contain; color: #333; text-align: center; float: left; font-size: 0.6rem; line-height: 35px; letter-spacing: 0.5px; cursor: pointer; "
                    onclick="onClickSelect(this,1108371066,'Y14eTGIw68cdq207AQWh4W37LyN4UHM/WFhVbdflcx0=','0','C')">C11</p>
                <p style="margin: 3px; width: 35px; height: 35px; background: url(content/img/seat-standard.png); background-size: contain; color: #333; text-align: center; float: left; font-size: 0.6rem; line-height: 35px; letter-spacing: 0.5px; cursor: pointer; "
                    onclick="onClickSelect(this,1108371067,'XSC54MHDEThsRjZOaMsTNXBttwI5r+UWIl4xff5d0dE=','0','C')">C10</p>
                <p style="margin: 3px; width: 35px; height: 35px; background: url(content/img/seat-standard.png); background-size: contain; color: #333; text-align: center; float: left; font-size: 0.6rem; line-height: 35px; letter-spacing: 0.5px; cursor: pointer; "
                    onclick="onClickSelect(this,1108371068,'EWye59AOgaQI8XoNG3VaRdGzHJoNEPaepqHVhUrnAx8=','0','C')">C09</p>
                <p style="margin: 3px; width: 35px; height: 35px; background: url(content/img/seat-standard.png); background-size: contain; color: #333; text-align: center; float: left; font-size: 0.6rem; line-height: 35px; letter-spacing: 0.5px; cursor: pointer; "
                    onclick="onClickSelect(this,1108370970,'Nz1sBFk3PiipdiAEvekPsvVeBQRcRfTy72zU3owhVgA=','0','C')">C08</p>
                <p style="margin: 3px; width: 35px; height: 35px; background: url(content/img/seat-standard.png); background-size: contain; color: #333; text-align: center; float: left; font-size: 0.6rem; line-height: 35px; letter-spacing: 0.5px; cursor: pointer; "
                    onclick="onClickSelect(this,1108370971,'BZNfSKrQXM90ehDeIebJgBu5BayJs0ZfzbSIZwjTqj8=','0','C')">C07</p>
                <p style="margin: 3px; width: 35px; height: 35px; background: url(content/img/seat-standard.png); background-size: contain; color: #333; text-align: center; float: left; font-size: 0.6rem; line-height: 35px; letter-spacing: 0.5px; cursor: pointer; "
                    onclick="onClickSelect(this,1108370972,'kWG1CgZ0dkUaRLD6x4c/cbDxUFQdn2GUzFaRJNnDkok=','0','C')">C06</p>
                <p style="margin: 3px; width: 35px; height: 35px; background: url(content/img/seat-standard.png); background-size: contain; color: #333; text-align: center; float: left; font-size: 0.6rem; line-height: 35px; letter-spacing: 0.5px; cursor: pointer; "
                    onclick="onClickSelect(this,1108370973,'xiqoFOzXs4qMmXSVcbvTomaBBRWUcbxTOhbnCmvoNp8=','0','C')">C05</p>
                <p style="margin: 3px; width: 35px; height: 35px; background: url(content/img/seat-standard.png); background-size: contain; color: #333; text-align: center; float: left; font-size: 0.6rem; line-height: 35px; letter-spacing: 0.5px; cursor: pointer; "
                    onclick="onClickSelect(this,1108370974,'kP783tPix8nqdlcs7QekdZj1AmqdI8a603HJEOpMf0k=','0','C')">C04</p>
                <p style="margin: 3px; width: 35px; height: 35px; background: url(content/img/seat-standard.png); background-size: contain; color: #333; text-align: center; float: left; font-size: 0.6rem; line-height: 35px; letter-spacing: 0.5px; cursor: pointer; "
                    onclick="onClickSelect(this,1108370975,'lI9vVxYqLLW/z9hEj3pgV6DXQCcN60gvTglUhnnNxtM=','0','C')">C03</p>
                <p style="margin:3px;width:35px;height:35px;background-color:transparent;"></p>
                <p style="margin:3px;width:35px;height:35px;background-color:transparent;"></p>
                <p style="margin: 3px; width: 35px; height: 35px; background: url(content/img/seat-standard.png); background-size: contain; color: #333; text-align: center; float: left; font-size: 0.6rem; line-height: 35px; letter-spacing: 0.5px; cursor: pointer; "
                    onclick="onClickSelect(this,1108370976,'kSPOsDhwbvMn/N801sQR0VhBL/dwKGGHYj1Z0XSLtPU=','0','C')">C02</p>
                <p style="margin: 3px; width: 35px; height: 35px; background: url(content/img/seat-standard.png); background-size: contain; color: #333; text-align: center; float: left; font-size: 0.6rem; line-height: 35px; letter-spacing: 0.5px; cursor: pointer; "
                    onclick="onClickSelect(this,1108370977,'D620K5ND8mdA0kvJzFCMVqutr8WuUFjiKtCnBcY5e/I=','0','C')">C01</p>
            </div>
            <div class="clearfix row" style="position: relative; display: flex; justify-content: center;">
                <p style="margin: 3px; width: 35px; height: 35px; background: url(content/img/seat-standard.png); background-size: contain; color: #333; text-align: center; float: left; font-size: 0.6rem; line-height: 35px; letter-spacing: 0.5px; cursor: pointer; "
                    onclick="onClickSelect(this,1108370979,'RlTl8M4doX+4fRuAiFev+WNt1Gc4Tas+hoD+QBH7zoA=','0','D')">D12</p>
                <p style="margin: 3px; width: 35px; height: 35px; background: url(content/img/seat-standard.png); background-size: contain; color: #333; text-align: center; float: left; font-size: 0.6rem; line-height: 35px; letter-spacing: 0.5px; cursor: pointer; "
                    onclick="onClickSelect(this,1108370980,'P0glgzzsyKNQVHdQOMSNqu83PYkD3HGwsOZOw/UG+Xo=','0','D')">D11</p>
                <p style="margin: 3px; width: 35px; height: 35px; background: url(content/img/seat-standard.png); background-size: contain; color: #333; text-align: center; float: left; font-size: 0.6rem; line-height: 35px; letter-spacing: 0.5px; cursor: pointer; "
                    onclick="onClickSelect(this,1108370981,'n8RfUgEKdySOUHydZs28KqstRcEk6ZayiO0yuFlG/PU=','0','D')">D10</p>
                <p style="margin: 3px; width: 35px; height: 35px; background: url(content/img/seat-standard.png); background-size: contain; color: #333; text-align: center; float: left; font-size: 0.6rem; line-height: 35px; letter-spacing: 0.5px; cursor: pointer; "
                    onclick="onClickSelect(this,1108370982,'fP3PPMxwGLAyYu6LLzUedubM7zHbbXlC1H7pCfOSOq4=','0','D')">D09</p>
                <p style="margin: 3px; width: 35px; height: 35px; background: url(content/img/seat-standard.png); background-size: contain; color: #333; text-align: center; float: left; font-size: 0.6rem; line-height: 35px; letter-spacing: 0.5px; cursor: pointer; "
                    onclick="onClickSelect(this,1108370983,'BTiMmx3gLkJ/81lJFgoG6TENqO5Nw0njT9XGwp0xOQE=','0','D')">D08</p>
                <p style="margin: 3px; width: 35px; height: 35px; background: url(content/img/seat-standard.png); background-size: contain; color: #333; text-align: center; float: left; font-size: 0.6rem; line-height: 35px; letter-spacing: 0.5px; cursor: pointer; "
                    onclick="onClickSelect(this,1108370984,'PWN27i0FuckUSVz8ZbUoBZFgZdZzriTpKCuZkKZPmto=','0','D')">D07</p>
                <p style="margin: 3px; width: 35px; height: 35px; background: url(content/img/seat-standard.png); background-size: contain; color: #333; text-align: center; float: left; font-size: 0.6rem; line-height: 35px; letter-spacing: 0.5px; cursor: pointer; "
                    onclick="onClickSelect(this,1108370985,'okVpObI0zAICSmJhXuBosgbND8DOqPCIZNqoOqbU1fc=','0','D')">D06</p>
                <p style="margin: 3px; width: 35px; height: 35px; background: url(content/img/seat-standard.png); background-size: contain; color: #333; text-align: center; float: left; font-size: 0.6rem; line-height: 35px; letter-spacing: 0.5px; cursor: pointer; "
                    onclick="onClickSelect(this,1108370986,'h8lJAedMcVt1YLfDI5vVXeWsoY1AvCPKC7YwAPwcXUs=','0','D')">D05</p>
                <p style="margin: 3px; width: 35px; height: 35px; background: url(content/img/seat-standard.png); background-size: contain; color: #333; text-align: center; float: left; font-size: 0.6rem; line-height: 35px; letter-spacing: 0.5px; cursor: pointer; "
                    onclick="onClickSelect(this,1108370987,'OYdYeEai/69PynFX9CrVLGMNpxCnDS12e1o0uCeoZT8=','0','D')">D04</p>
                <p style="margin: 3px; width: 35px; height: 35px; background: url(content/img/seat-standard.png); background-size: contain; color: #333; text-align: center; float: left; font-size: 0.6rem; line-height: 35px; letter-spacing: 0.5px; cursor: pointer; "
                    onclick="onClickSelect(this,1108370988,'j+3O5cE1eTYhcyDd34k7tMX1Yy+DKRoBvoEFJdmuZ3k=','0','D')">D03</p>
                <p style="margin:3px;width:35px;height:35px;background-color:transparent;"></p>
                <p style="margin:3px;width:35px;height:35px;background-color:transparent;"></p>
                <p style="margin: 3px; width: 35px; height: 35px; background: url(content/img/seat-standard.png); background-size: contain; color: #333; text-align: center; float: left; font-size: 0.6rem; line-height: 35px; letter-spacing: 0.5px; cursor: pointer; "
                    onclick="onClickSelect(this,1108370989,'pAmYAL3tGBfmAWf0Aemi1WFjhbFbT5bIS1KqtbVLxxQ=','0','D')">D02</p>
                <p style="margin: 3px; width: 35px; height: 35px; background: url(content/img/seat-standard.png); background-size: contain; color: #333; text-align: center; float: left; font-size: 0.6rem; line-height: 35px; letter-spacing: 0.5px; cursor: pointer; "
                    onclick="onClickSelect(this,1108370990,'GsilQlFqJJJdIA+ZAAEIsnYGtKMuHhGJgHF97WCp23Y=','0','D')">D01</p>
            </div>
            <div class="clearfix row" style="position: relative; display: flex; justify-content: center;">
                <p style="margin: 3px; width: 35px; height: 35px; background: url(content/img/seat-standard.png); background-size: contain; color: #333; text-align: center; float: left; font-size: 0.6rem; line-height: 35px; letter-spacing: 0.5px; cursor: pointer; "
                    onclick="onClickSelect(this,1108370992,'cju71T11Boy59NhJVEGYdBp+FJ/rbUkm+nlZ8N8+Rxg=','0','E')">E12</p>
                <p style="margin: 3px; width: 35px; height: 35px; background: url(content/img/seat-standard.png); background-size: contain; color: #333; text-align: center; float: left; font-size: 0.6rem; line-height: 35px; letter-spacing: 0.5px; cursor: pointer; "
                    onclick="onClickSelect(this,1108370993,'9RWwOqrK4lYq+Aa1zoArzkF9edKSDVE8IgI14G91qr0=','0','E')">E11</p>
                <p style="margin: 3px; width: 35px; height: 35px; background: url(content/img/seat-standard.png); background-size: contain; color: #333; text-align: center; float: left; font-size: 0.6rem; line-height: 35px; letter-spacing: 0.5px; cursor: pointer; "
                    onclick="onClickSelect(this,1108370994,'grkZv6/SLnRfB7YZyIhYqGlmCd6EZE2uvoJog4SA/Ow=','0','E')">E10</p>
                <p style="margin: 3px; width: 35px; height: 35px; background: url(content/img/seat-standard.png); background-size: contain; color: #333; text-align: center; float: left; font-size: 0.6rem; line-height: 35px; letter-spacing: 0.5px; cursor: pointer; "
                    onclick="onClickSelect(this,1108370995,'R1t4Ux1rzyL/RoFjSqU9aN5vQPI43lzxwBh9rrUBoVo=','0','E')">E09</p>
                <p style="margin: 3px; width: 35px; height: 35px; background: url(content/img/seat-standard.png); background-size: contain; color: #333; text-align: center; float: left; font-size: 0.6rem; line-height: 35px; letter-spacing: 0.5px; cursor: pointer; "
                    onclick="onClickSelect(this,1108370996,'g+jfm5kzyDFnZEwqzE/cHqUJ3Pz1fjnLobQr0jlz8Io=','0','E')">E08</p>
                <p style="margin: 3px; width: 35px; height: 35px; background: url(content/img/seat-standard.png); background-size: contain; color: #333; text-align: center; float: left; font-size: 0.6rem; line-height: 35px; letter-spacing: 0.5px; cursor: pointer; "
                    onclick="onClickSelect(this,1108370997,'TZbLE/wC6QpkatHdGLkjt3D4yonn4cMvMzBqwCNldnw=','0','E')">E07</p>
                <p style="margin: 3px; width: 35px; height: 35px; background: url(content/img/seat-standard.png); background-size: contain; color: #333; text-align: center; float: left; font-size: 0.6rem; line-height: 35px; letter-spacing: 0.5px; cursor: pointer; "
                    onclick="onClickSelect(this,1108370998,'wAP9Ddt68NFW8TpRQcsehYDQCEezk8EMxBSibMMEduM=','0','E')">E06</p>
                <p style="margin: 3px; width: 35px; height: 35px; background: url(content/img/seat-standard.png); background-size: contain; color: #333; text-align: center; float: left; font-size: 0.6rem; line-height: 35px; letter-spacing: 0.5px; cursor: pointer; "
                    onclick="onClickSelect(this,1108370999,'M2QbAA1nUAB0I+mdLkc2Geu5lC9N1FvR10ZOEZ50dnE=','0','E')">E05</p>
                <p style="margin: 3px; width: 35px; height: 35px; background: url(content/img/seat-standard.png); background-size: contain; color: #333; text-align: center; float: left; font-size: 0.6rem; line-height: 35px; letter-spacing: 0.5px; cursor: pointer; "
                    onclick="onClickSelect(this,1108371000,'aLAegmCmyhRIHO+QU4DoikRtVI0lkmsPuTSJjAPscJk=','0','E')">E04</p>
                <p style="margin: 3px; width: 35px; height: 35px; background: url(content/img/seat-standard.png); background-size: contain; color: #333; text-align: center; float: left; font-size: 0.6rem; line-height: 35px; letter-spacing: 0.5px; cursor: pointer; "
                    onclick="onClickSelect(this,1108371001,'oZ6KdNDxIupO1icVq9Bi0tBH+cNwKW1SUlHQeDUW/PA=','0','E')">E03</p>
                <p style="margin:3px;width:35px;height:35px;background-color:transparent;"></p>
                <p style="margin:3px;width:35px;height:35px;background-color:transparent;"></p>
                <p style="margin: 3px; width: 35px; height: 35px; background: url(content/img/seat-standard.png); background-size: contain; color: #333; text-align: center; float: left; font-size: 0.6rem; line-height: 35px; letter-spacing: 0.5px; cursor: pointer; "
                    onclick="onClickSelect(this,1108371002,'85czQrVp0GPOye8p22PrAUpFfbxOYIglcuJNzEki6yQ=','0','E')">E02</p>
                <p style="margin: 3px; width: 35px; height: 35px; background: url(content/img/seat-standard.png); background-size: contain; color: #333; text-align: center; float: left; font-size: 0.6rem; line-height: 35px; letter-spacing: 0.5px; cursor: pointer; "
                    onclick="onClickSelect(this,1108371003,'UzZbZtGZRntLsLlUQiogXcDgtQnQK9i0jHjEChyReHs=','0','E')">E01</p>
            </div>
            <div class="clearfix row" style="position: relative; display: flex; justify-content: center;">
                <p style="margin: 3px; width: 35px; height: 35px; background: url(content/img/seat-standard.png); background-size: contain; color: #333; text-align: center; float: left; font-size: 0.6rem; line-height: 35px; letter-spacing: 0.5px; cursor: pointer; "
                    onclick="onClickSelect(this,1108371005,'xK5PYT9/2N9XcGedlwlDwYv9OBMGGpxLEKj7BuedcBE=','0','F')">F12</p>
                <p style="margin: 3px; width: 35px; height: 35px; background: url(content/img/seat-standard.png); background-size: contain; color: #333; text-align: center; float: left; font-size: 0.6rem; line-height: 35px; letter-spacing: 0.5px; cursor: pointer; "
                    onclick="onClickSelect(this,1108371006,'NzRBx08WI0tfCwKzL9XN0nvfqRRsQvlhStN7vz06mKg=','0','F')">F11</p>
                <p style="margin: 3px; width: 35px; height: 35px; background: url(content/img/seat-standard.png); background-size: contain; color: #333; text-align: center; float: left; font-size: 0.6rem; line-height: 35px; letter-spacing: 0.5px; cursor: pointer; "
                    onclick="onClickSelect(this,1108371007,'S2uI8hdx3CGO0SX+FVGkUmS109fZ5tlrUbyKKzdNFPc=','0','F')">F10</p>
                <p style="margin: 3px; width: 35px; height: 35px; background: url(content/img/seat-standard.png); background-size: contain; color: #333; text-align: center; float: left; font-size: 0.6rem; line-height: 35px; letter-spacing: 0.5px; cursor: pointer; "
                    onclick="onClickSelect(this,1108371008,'Wnydw2kEmpZNHyf9f7/b9WJplL6vz5VXvlEItj61C/A=','0','F')">F09</p>
                <p style="margin: 3px; width: 35px; height: 35px; background: url(content/img/seat-standard.png); background-size: contain; color: #333; text-align: center; float: left; font-size: 0.6rem; line-height: 35px; letter-spacing: 0.5px; cursor: pointer; "
                    onclick="onClickSelect(this,1108371009,'zlChdHRpJZPNzflfuf0CH/xggiDpTwuViW9MSCZUhvQ=','0','F')">F08</p>
                <p style="margin: 3px; width: 35px; height: 35px; background: url(content/img/seat-standard.png); background-size: contain; color: #333; text-align: center; float: left; font-size: 0.6rem; line-height: 35px; letter-spacing: 0.5px; cursor: pointer; "
                    onclick="onClickSelect(this,1108371010,'GXHNh0tUbCK7WjkXgknSsDtcy5yITqFPXhdV9tTBZV0=','0','F')">F07</p>
                <p style="margin: 3px; width: 35px; height: 35px; background: url(content/img/seat-standard.png); background-size: contain; color: #333; text-align: center; float: left; font-size: 0.6rem; line-height: 35px; letter-spacing: 0.5px; cursor: pointer; "
                    onclick="onClickSelect(this,1108371011,'LSc5y5J3X/81RaehrUgtYSN6x1HLWQQDjKAiujftUMI=','0','F')">F06</p>
                <p style="margin: 3px; width: 35px; height: 35px; background: url(content/img/seat-standard.png); background-size: contain; color: #333; text-align: center; float: left; font-size: 0.6rem; line-height: 35px; letter-spacing: 0.5px; cursor: pointer; "
                    onclick="onClickSelect(this,1108371012,'0NG53HrDc4DeMyRPQPBM23f6URvzTUsF355+axCMHiM=','0','F')">F05</p>
                <p style="margin: 3px; width: 35px; height: 35px; background: url(content/img/seat-standard.png); background-size: contain; color: #333; text-align: center; float: left; font-size: 0.6rem; line-height: 35px; letter-spacing: 0.5px; cursor: pointer; "
                    onclick="onClickSelect(this,1108371013,'QjX47OkFAV75IlhKVArCCFfMXHmbZkcEoSuBzhZzK74=','0','F')">F04</p>
                <p style="margin: 3px; width: 35px; height: 35px; background: url(content/img/seat-standard.png); background-size: contain; color: #333; text-align: center; float: left; font-size: 0.6rem; line-height: 35px; letter-spacing: 0.5px; cursor: pointer; "
                    onclick="onClickSelect(this,1108371014,'KvbWqsqIOAJyDByBX+asrN1zyRi6USJzxAKCQ50bCHY=','0','F')">F03</p>
                <p style="margin:3px;width:35px;height:35px;background-color:transparent;"></p>
                <p style="margin:3px;width:35px;height:35px;background-color:transparent;"></p>
                <p style="margin:3px;width:35px;height:35px;background-color:transparent;"></p>
                <p style="margin:3px;width:35px;height:35px;background-color:transparent;"></p>
            </div>
            <div class="clearfix row" style="position: relative; display: flex; justify-content: center;">
                <p style="margin: 3px; width: 35px; height: 35px; background: url(content/img/seat-standard.png); background-size: contain; color: #333; text-align: center; float: left; font-size: 0.6rem; line-height: 35px; letter-spacing: 0.5px; cursor: pointer; "
                    onclick="onClickSelect(this,1108371016,'yyRbaXJgFjEeCKbIXitDartOI+03IPUFpMD6aOt3oms=','0','G')">G12</p>
                <p style="margin: 3px; width: 35px; height: 35px; background: url(content/img/seat-standard.png); background-size: contain; color: #333; text-align: center; float: left; font-size: 0.6rem; line-height: 35px; letter-spacing: 0.5px; cursor: pointer; "
                    onclick="onClickSelect(this,1108371017,'6zHRoqW0Ih7u0RNYhKuvwtX6X/tFsdirX5DOH/WKAxY=','0','G')">G11</p>
                <p style="margin: 3px; width: 35px; height: 35px; background: url(content/img/seat-standard.png); background-size: contain; color: #333; text-align: center; float: left; font-size: 0.6rem; line-height: 35px; letter-spacing: 0.5px; cursor: pointer; "
                    onclick="onClickSelect(this,1108371018,'kpxfKmB4SpGaYU5Xx1SvICDRcQ5cU76GTxtueLJZkSU=','0','G')">G10</p>
                <p style="margin: 3px; width: 35px; height: 35px; background: url(content/img/seat-standard.png); background-size: contain; color: #333; text-align: center; float: left; font-size: 0.6rem; line-height: 35px; letter-spacing: 0.5px; cursor: pointer; "
                    onclick="onClickSelect(this,1108371019,'g4smWNbG3Uwm11DbeMTqEXaMeHJUWpHLT2QxEWRQWD4=','0','G')">G09</p>
                <p style="margin: 3px; width: 35px; height: 35px; background: url(content/img/seat-standard.png); background-size: contain; color: #333; text-align: center; float: left; font-size: 0.6rem; line-height: 35px; letter-spacing: 0.5px; cursor: pointer; "
                    onclick="onClickSelect(this,1108371020,'xwsAOuIPKdK+Hr49XCR2vBoQ0EZgNbHonFx5NSeH250=','0','G')">G08</p>
                <p style="margin: 3px; width: 35px; height: 35px; background: url(content/img/seat-standard.png); background-size: contain; color: #333; text-align: center; float: left; font-size: 0.6rem; line-height: 35px; letter-spacing: 0.5px; cursor: pointer; "
                    onclick="onClickSelect(this,1108371021,'MN8J9fmGgzN1XXU06MBo6720jLl/wzYH4r1pa/gCQ2c=','0','G')">G07</p>
                <p style="margin: 3px; width: 35px; height: 35px; background: url(content/img/seat-standard.png); background-size: contain; color: #333; text-align: center; float: left; font-size: 0.6rem; line-height: 35px; letter-spacing: 0.5px; cursor: pointer; "
                    onclick="onClickSelect(this,1108371022,'81JuXtoxBzqinK6tHMRokhigMfrVtcHwVQO7cmD4qL4=','0','G')">G06</p>
                <p style="margin: 3px; width: 35px; height: 35px; background: url(content/img/seat-standard.png); background-size: contain; color: #333; text-align: center; float: left; font-size: 0.6rem; line-height: 35px; letter-spacing: 0.5px; cursor: pointer; "
                    onclick="onClickSelect(this,1108371023,'imicsqKdAkYMr2P8C0KhoJr201PxdshgvJvznb8Y4CM=','0','G')">G05</p>
                <p style="margin: 3px; width: 35px; height: 35px; background: url(content/img/seat-standard.png); background-size: contain; color: #333; text-align: center; float: left; font-size: 0.6rem; line-height: 35px; letter-spacing: 0.5px; cursor: pointer; "
                    onclick="onClickSelect(this,1108371024,'X4l2cr35WZNZ/qmnSSNoYdTJMoUFzl+DueqYqFIfsZw=','0','G')">G04</p>
                <p style="margin: 3px; width: 35px; height: 35px; background: url(content/img/seat-standard.png); background-size: contain; color: #333; text-align: center; float: left; font-size: 0.6rem; line-height: 35px; letter-spacing: 0.5px; cursor: pointer; "
                    onclick="onClickSelect(this,1108371025,'6Ml5yA1iUqaGHw5xmCjkgneqlq1/F2ayW6gK+4MRR90=','0','G')">G03</p>
                <p style="margin:3px;width:35px;height:35px;background-color:transparent;"></p>
                <p style="margin:3px;width:35px;height:35px;background-color:transparent;"></p>
                <p style="margin:3px;width:35px;height:35px;background-color:transparent;"></p>
                <p style="margin:3px;width:35px;height:35px;background-color:transparent;"></p>
            </div>
            <div class="clearfix row" style="position: relative; display: flex; justify-content: center;">
                <p style="margin: 3px; width: 35px; height: 35px; background: url(content/img/seat-standard.png); background-size: contain; color: #333; text-align: center; float: left; font-size: 0.6rem; line-height: 35px; letter-spacing: 0.5px; cursor: pointer; "
                    onclick="onClickSelect(this,1108371027,'a2VzulRM2Nz9+KqX8xM+4H7uuVjyVui1ITc7KgAgt2c=','0','H')">H12</p>
                <p style="margin: 3px; width: 35px; height: 35px; background: url(content/img/seat-standard.png); background-size: contain; color: #333; text-align: center; float: left; font-size: 0.6rem; line-height: 35px; letter-spacing: 0.5px; cursor: pointer; "
                    onclick="onClickSelect(this,1108371028,'aMxNRW10b6m62EniinTZ1tm9Ftg6v/Zv8Ui+CUChZ8Q=','0','H')">H11</p>
                <p style="margin: 3px; width: 35px; height: 35px; background: url(content/img/seat-standard.png); background-size: contain; color: #333; text-align: center; float: left; font-size: 0.6rem; line-height: 35px; letter-spacing: 0.5px; cursor: pointer; "
                    onclick="onClickSelect(this,1108371029,'QDuGk2SsSIjXq4E0NaJ7GKNTnZU5bUXs73dg83VL9h8=','0','H')">H10</p>
                <p style="margin: 3px; width: 35px; height: 35px; background: url(content/img/seat-standard.png); background-size: contain; color: #333; text-align: center; float: left; font-size: 0.6rem; line-height: 35px; letter-spacing: 0.5px; cursor: pointer; "
                    onclick="onClickSelect(this,1108371030,'CtKV9rAiylDu0SDDwC8p4zgfYVoxjWog79yqySON19U=','0','H')">H09</p>
                <p style="margin: 3px; width: 35px; height: 35px; background: url(content/img/seat-standard.png); background-size: contain; color: #333; text-align: center; float: left; font-size: 0.6rem; line-height: 35px; letter-spacing: 0.5px; cursor: pointer; "
                    onclick="onClickSelect(this,1108371031,'TKnA77P2S89OL6iB/WNjsIUSVzlPLje65h0HpuBPAgA=','0','H')">H08</p>
                <p style="margin: 3px; width: 35px; height: 35px; background: url(content/img/seat-standard.png); background-size: contain; color: #333; text-align: center; float: left; font-size: 0.6rem; line-height: 35px; letter-spacing: 0.5px; cursor: pointer; "
                    onclick="onClickSelect(this,1108371032,'MCN8Rf8Qtl8cGzU78PcED6Ep/2lBkYhBQPl5TypGvKQ=','0','H')">H07</p>
                <p style="margin: 3px; width: 35px; height: 35px; background: url(content/img/seat-standard.png); background-size: contain; color: #333; text-align: center; float: left; font-size: 0.6rem; line-height: 35px; letter-spacing: 0.5px; cursor: pointer; "
                    onclick="onClickSelect(this,1108371033,'mZuSKk2gOxO6PZQbHwjI41O7SuE0psy5qkL6TK2V7k4=','0','H')">H06</p>
                <p style="margin: 3px; width: 35px; height: 35px; background: url(content/img/seat-standard.png); background-size: contain; color: #333; text-align: center; float: left; font-size: 0.6rem; line-height: 35px; letter-spacing: 0.5px; cursor: pointer; "
                    onclick="onClickSelect(this,1108371034,'xWw52DdzVGo2NIUY6gP1VbSxdczR+7Flf1337AbmmeY=','0','H')">H05</p>
                <p style="margin: 3px; width: 35px; height: 35px; background: url(content/img/seat-standard.png); background-size: contain; color: #333; text-align: center; float: left; font-size: 0.6rem; line-height: 35px; letter-spacing: 0.5px; cursor: pointer; "
                    onclick="onClickSelect(this,1108371035,'/ITImCwCP7CM2OhMqZoElkNP5/QBHCPrlHQ/ddXVdmk=','0','H')">H04</p>
                <p style="margin: 3px; width: 35px; height: 35px; background: url(content/img/seat-standard.png); background-size: contain; color: #333; text-align: center; float: left; font-size: 0.6rem; line-height: 35px; letter-spacing: 0.5px; cursor: pointer; "
                    onclick="onClickSelect(this,1108371036,'NpWpmMWp9/Kx/a/lrrgf8kmdTQ1rihOx0BFy5Xxg7DU=','0','H')">H03</p>
                <p style="margin:3px;width:35px;height:35px;background-color:transparent;"></p>
                <p style="margin:3px;width:35px;height:35px;background-color:transparent;"></p>
                <p style="margin:3px;width:35px;height:35px;background-color:transparent;"></p>
                <p style="margin:3px;width:35px;height:35px;background-color:transparent;"></p>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <section class="categories-section padding-top-20 padding-bottom-40 margin-bottom-10 container bg-main info-map"
        style="box-shadow: 0px -2px 5px 0px #333; position: fixed; width: 100%; border: 0; left: 0; right: 0; height: 140px; bottom: 0; background: #fff; max-width: 100% !important; z-index: 999; padding-top: 10px;">
        <div class="container">
            <div class="row ">
                <!-- section container -->
                <div class="col-lg-4">
                    <h5
                        style="margin-bottom: 15px; text-transform: uppercase; font-weight: 500; color: #444444; text-decoration: underline; background-image: url(Content/img/tag.png); -webkit-background-size: 21px 6px; background-size: 21px 6px; background-position: left center; background-repeat: no-repeat; padding-left: 30px;">
                        Ch&#250; th&#237;ch ghế</h5>
                    <div class="note-color">
                        <div class="note-col">
                            <p
                                style="width: 20px; height: 20px; background: url(content/img/seat-standard.png) !important; background-size: contain !important;">
                            </p>
                            <p> Ghế thường</p>
                        </div>
                        <div class="note-col">
                            <p
                                style="width: 20px; height: 20px; background: url(content/img/seat-sw.png) !important; background-size: contain !important;">
                            </p>
                            <p> Ghế đ&#244;i</p>
                        </div>
                        <div class="note-col">
                            <p
                                style="width: 20px; height: 20px; background: url(content/img/seat-vip.png) !important; background-size: contain !important;">
                            </p>
                            <p> Ghế VIP</p>
                        </div>
                        <div class="note-col">
                            <p
                                style="width: 20px; height: 20px; background: url(content/img/seat.png) !important; background-size: contain !important;">
                            </p>
                            <p> Ghế đ&#227; b&#225;n</p>
                        </div>
                        <div class="note-col">
                            <p
                                style="width: 20px; height: 20px; background: url(content/img/seat-selected.png) !important; background-size: contain !important;">
                            </p>
                            <p> Ghế đang chọn</p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <div class="col-lg-12">
                        <h5
                            style="margin-bottom: 15px; text-transform: uppercase; font-weight: 500; color: #444444; text-decoration: underline; background-image: url(Content/img/tag.png); -webkit-background-size: 21px 6px; background-size: 21px 6px; background-position: left center; background-repeat: no-repeat; padding-left: 30px;">
                            Ghế đ&#227; chọn</h5>
                        <div class="note-color">
                            <div class="note-col">
                                <p id="total_ticket" style="letter-spacing: 1px;font-size: 15px;">...</p>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-lg-12">
                        <h5
                            style="margin-bottom: 15px; text-transform: uppercase; font-weight: 500; color: #444444; text-decoration: underline; background-image: url(Content/img/tag.png); -webkit-background-size: 21px 6px; background-size: 21px 6px; background-position: left center; background-repeat: no-repeat; padding-left: 30px;">
                            Gi&#225; v&#233;</h5>
                        <div class="note-color">
                            <div class="note-col">
                                <p id="total_money" style="letter-spacing: 1px;font-size: 15px;">0</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12" style="align-items: center; display: flex;">
                    <div class="note-color">
                        <div class="note-col" style="width:100%"><a href="#" onclick="nextStep()"
                                style="border-radius: 0;padding: 13px;background: #f37737;border-color: yellow;width: 70%;"
                                class="btn btn-success">Tiếp theo</a></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </section>
    <script>
        window.onload = function() {
            var htmlWidth = $('body').innerWidth();
            var bodyWidth = (14 + 2) * 38;
            if (htmlWidth < bodyWidth) {
                var scale = htmlWidth / bodyWidth;
                $(".list-seat").animate({
                    'zoom': scale
                }, 'slow');
            }

            var isMobile = {
                Android: function() {
                    return navigator.userAgent.match(/Android/i);
                },
                BlackBerry: function() {
                    return navigator.userAgent.match(/BlackBerry/i);
                },
                iOS: function() {
                    return navigator.userAgent.match(/iPhone|iPad|iPod/i);
                },
                Opera: function() {
                    return navigator.userAgent.match(/Opera Mini/i);
                },
                Windows: function() {
                    return navigator.userAgent.match(/IEMobile/i);
                },
                any: function() {
                    return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() ||
                        isMobile.Windows());
                }
            };
            if (isMobile.Android()) {
                $(".list-seat p").addClass("android-font");
            }
            if (isMobile.Windows()) {
                $(".list-seat p").addClass("windows-font");
            }
        };
        var total = "";
        var total_money = 0;
        var curentSweetboxSelect = "1";

        function onClickSelect(elm, id, price, sid, row) {


            $(".main-reloader").css("display", "block");
            var name = $(elm).html();
            var fullName = name;
            if (total.split(",").length >= 10 && !total.includes(fullName)) {
                $.sweetModal({
                    content: 'Chỉ được chọn tối đa 10 ghế',
                    title: '',
                    icon: $.sweetModal.ICON_WARNING,
                    theme: $.sweetModal.THEME_DARK,
                    buttons: {
                        'OK': {
                            classes: 'redB'
                        }
                    }
                });
                $(".main-reloader").css("display", "none");
                return false;
            }
            var data = "{'seatID':'" + id + "','seatTotal':'" + total + "','rowName':'" + row + "','seatPrice':'" + price +
                "'}";
            if (sid == '0') {
                $.ajax({
                    url: "/BookTicket/UpdateBookTicketInfor",
                    type: "POST",
                    data: data,
                    traditional: true,
                    dataType: "json",
                    contentType: 'application/json; charset=utf-8',
                    success: function(data) {
                        //alert(data);
                        if (data != "true" && data != null) {
                            var seatPrice = parseInt(data);
                            if (total.split(",").length >= 10 && !total.includes(fullName)) {
                                $.sweetModal({
                                    content: 'Chỉ được chọn tối đa 10 ghế',
                                    title: '',
                                    icon: $.sweetModal.ICON_WARNING,
                                    theme: $.sweetModal.THEME_DARK,
                                    buttons: {
                                        'OK': {
                                            classes: 'redB'
                                        }
                                    }
                                });
                                $(".main-reloader").css("display", "none");
                                return false;
                            }
                            $(elm).toggleClass("current_select");

                            //alert(fullName);
                            if (total.includes(fullName)) {
                                total = total.replace("," + fullName, "");
                                total = total.replace(fullName, "");
                                total = total.replace(fullName + ",", "");
                                total_money -= seatPrice;
                            } else {
                                if (total == "") {
                                    total += fullName;
                                } else {
                                    total += "," + fullName;
                                }
                                total_money += seatPrice;
                            }
                            $("#total_ticket").html(total);
                            $("#total_money").html(total_money.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g,
                                "$1,") + " VNĐ");
                            $(".main-reloader").css("display", "none");
                            return false;
                        } else {

                            $(".main-reloader").css("display", "none");
                            $.sweetModal({
                                content: data,
                                title: '',
                                icon: $.sweetModal.ICON_WARNING,
                                theme: $.sweetModal.THEME_DARK,
                                buttons: {
                                    'OK': {
                                        classes: 'redB'
                                    }
                                }
                            });
                            return false;
                        }
                    },
                    error: function() {
                        $.sweetModal({
                            content: 'Đã xảy ra lỗi khi chọn ghế. Vui lòng tải lại trang và tiếp tục!',
                            title: '',
                            icon: $.sweetModal.ICON_WARNING,
                            theme: $.sweetModal.THEME_DARK,
                            buttons: {
                                'OK': {
                                    classes: 'redB'
                                }
                            }
                        });
                        $(".main-reloader").css("display", "none");
                        return false;
                    }
                });
                return false;
            } else {

                $.ajax({
                    url: "/BookTicket/UpdateBookTicketInfor",
                    type: "POST",
                    data: data,
                    traditional: true,
                    dataType: "json",
                    contentType: 'application/json; charset=utf-8',
                    success: function(data) {
                        //alert(data);
                        if (data != "true" && data != null) {
                            var seatPrice = parseInt(data);
                            if (total.split(",").length >= 10 && !total.includes(fullName)) {
                                $.sweetModal({
                                    content: 'Chỉ được chọn tối đa 10 ghế',
                                    title: '',
                                    icon: $.sweetModal.ICON_WARNING,
                                    theme: $.sweetModal.THEME_DARK,
                                    buttons: {
                                        'OK': {
                                            classes: 'redB'
                                        }
                                    }
                                });
                                $(".main-reloader").css("display", "none");
                                return false;
                            }
                            $('.' + sid).each(function(index, elment) {
                                $(elment).toggleClass("current_select")
                            });

                            //alert(fullName);
                            if (total.includes(fullName)) {
                                total = total.replace("," + fullName, "");
                                total = total.replace(fullName, "");
                                total = total.replace(fullName + ",", "");
                                total_money -= seatPrice;
                            } else {
                                if (total == "") {
                                    total += fullName;
                                } else {
                                    total += "," + fullName;
                                }
                                total_money += seatPrice;
                            }
                            $("#total_ticket").html(total);
                            $("#total_money").html(total_money.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g,
                                "$1,") + " VNĐ");
                            $(".main-reloader").css("display", "none");
                            return false;
                        } else {

                            $(".main-reloader").css("display", "none");
                            $.sweetModal({
                                content: data,
                                title: '',
                                icon: $.sweetModal.ICON_WARNING,
                                theme: $.sweetModal.THEME_DARK,
                                buttons: {
                                    'OK': {
                                        classes: 'redB'
                                    }
                                }
                            });
                            return false;
                        }
                    },
                    error: function() {
                        $.sweetModal({
                            content: 'Đã xảy ra lỗi khi chọn ghế. Vui lòng tải lại trang và tiếp tục!',
                            title: '',
                            icon: $.sweetModal.ICON_WARNING,
                            theme: $.sweetModal.THEME_DARK,
                            buttons: {
                                'OK': {
                                    classes: 'redB'
                                }
                            }
                        });
                        $(".main-reloader").css("display", "none");
                        return false;
                    }
                });
                return false;
            }
            //alert(data);



            //Call Ajax Update List Checked
        }

        function nextStep() {
            if (total == "") {
                $(".main-reloader").css("display", "none");
                $.sweetModal({
                    content: 'Vui lòng chọn ghế cần đặt',
                    title: '',
                    icon: $.sweetModal.ICON_WARNING,
                    theme: $.sweetModal.THEME_DARK,
                    buttons: {
                        'OK': {
                            classes: 'redB'
                        }
                    }
                });
                return false;
            }
            if (curentSweetboxSelect != "1") {
                $(".main-reloader").css("display", "none");
                $.sweetModal({
                    content: 'Vui lòng chọn ghế đôi liền kề. Ví dụ: L01-L02',
                    title: '',
                    icon: $.sweetModal.ICON_WARNING,
                    theme: $.sweetModal.THEME_DARK,
                    buttons: {
                        'OK': {
                            classes: 'redB'
                        }
                    }
                });
                return false;
            }
            var server_id = getParameterByName("server_id");
            var room = getParameterByName("room");

            //if (server_id == "1" || server_id == 1) {
            //    location.href = "dat-ve-confirm.html"+location.search;
            //}
            //else {
            //    location.href = "dat-ve-combo.html"+location.search;
            //}
            if ((room.toLocaleLowerCase().includes('goldclass'))) {
                $.sweetModal.confirm('Mỗi vé đã bao gồm 01 phần thức uống nhẹ & chăn ấm đi kèm.', function() {
                    $(".main-reloader").css("display", "none");
                    location.href = "index.html" + location.search;
                });

            } else {
                location.href = "dang-nhap.html" + location.search;
            }
        }

        function getParameterByName(name) {
            name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
            var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
                results = regex.exec(location.search);
            return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
        }
    </script>
@stop
