<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- <script src="https://cdn.tailwindcss.com"></script> -->
        {{-- <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" /> --}}
        <title>Resi thermal PDF - {{ $noResi }}</title>
        <style>
            html,
            body,
            div,
            span,
            applet,
            object,
            iframe,
            h1,
            h2,
            h3,
            h4,
            h5,
            h6,
            p,
            blockquote,
            pre,
            a,
            abbr,
            acronym,
            address,
            big,
            cite,
            code,
            del,
            dfn,
            em,
            img,
            ins,
            kbd,
            q,
            s,
            samp,
            small,
            strike,
            strong,
            sub,
            sup,
            tt,
            var,
            b,
            u,
            i,
            center,
            dl,
            dt,
            dd,
            ol,
            ul,
            li,
            fieldset,
            form,
            label,
            legend,
            table,
            caption,
            tbody,
            tfoot,
            thead,
            tr,
            th,
            td,
            article,
            aside,
            canvas,
            details,
            embed,
            figure,
            figcaption,
            footer,
            header,
            hgroup,
            menu,
            nav,
            output,
            ruby,
            section,
            summary,
            time,
            mark,
            audio,
            video {
                margin: 0;
                padding: 0;
                border: 0;
                font-size: 100%;
                font: inherit;
                vertical-align: baseline;
                /* font-family: "Poppins"; */
            }

            /* HTML5 display-role reset for older browsers */
            article,
            aside,
            details,
            figcaption,
            figure,
            footer,
            header,
            hgroup,
            menu,
            nav,
            section {
                display: block;
            }

            body {
                line-height: 1;
            }

            ol,
            ul {
                list-style: none;
            }

            blockquote,
            q {
                quotes: none;
            }

            blockquote:before,
            blockquote:after,
            q:before,
            q:after {
                content: "";
                content: none;
            }

            table {
                border-collapse: collapse;
                border-spacing: 0;
            }

            @font-face {
                font-family: 'Poppins';
                src: url("{{ asset('storage/Font/Poppins/Poppins-Regular.ttf') }}") format('ttf');
                /* tambahkan format lain jika diperlukan */
            }

            body {
                font-family: 'Poppins', sans-serif;
            }
        </style>
    </head>

    <body>
        <div class="A45" style="width: 350px; height: 525px; position: relative; background: white">
            <div class="Frame81"
                style="
                width: 350px;
                height: 400px;
                left: 12px;
                top: 18px;
                position: absolute;
                border: 2px black solid;
            ">
                <div class="Frame102"
                    style="
                    width: 350px;
                    height: 40px;
                    left: 0px;
                    top: 0px;
                    position: absolute;
                    background: none;
                    border-bottom: 2px black solid;
                ">
                    <div class="Frame116"
                        style="
                        width: 47px;
                        height: 37px;
                        left: 8px;
                        top: 2.5px;
                        position: absolute;
                    ">
                        <img class="Logo051"
                            style="
                            width: 100px;
                            height: 100px;
                            left: -14px;
                            top: -34px;
                            position: absolute;"
                            src="{{ asset('storage/images/Logo-05.png') }}" />
                    </div>
                    <div class="Frame103"
                        style="
                        width: 130px;
                        height: 42px;
                        left: 100px;
                        top: 0px;
                        position: absolute;
                    ">
                        <div class="Ws031120230000007"
                            style="
                            left: 2px;
                            top: 12px;
                            position: absolute;
                            color: black;
                            font-size: 14px ;
                            font-family: Poppins;
                            font-weight: 600;
                            word-wrap: break-word;
                        ">
                            {{ $noResi }}
                        </div>
                    </div>
                    <div class="Frame104"
                        style="
                        width: 60px;
                        height: 37px;
                        left: 287px;
                        top: 0px;
                        position: absolute;
                    ">
                        <div class="Mth0000"
                            style="
                            left: 0px;
                            top: 15px;
                            position: absolute;
                            color: black;
                            font-size: 10px;
                            font-family: Poppins;
                            font-weight: 400;
                            word-wrap: break-word;
                        ">
                            {{ $bkdTime }}
                        </div>
                    </div>
                </div>
                <div class="Frame104"
                    style="
                    width: 330px;
                    height: 72px;
                    left: 0px;
                    top: 40px;
                    position: absolute;
                    border-bottom: 2px black solid;
                    padding-left: 10px;
                    padding-right: 10px;
                    padding-top: 6px;
                    padding-bottom: 6px;
                    /* background: none; */
                ">
                    <div class="Frame106"
                        style="
                        width: 100%;
                        height: auto;
                        margin-bottom: 5px;
                        position: relative;
                    ">
                        <div class="shipper-name"
                            style="
                            width: auto;
                            display: flex;
                            position: relative;
                            color: black;
                            font-family: Poppins;
                            ">
                            <span
                                style="
                                width: auto;

                                font-size: 9px;
                                color: black;
                                font-weight: 400;
                                ">
                                Pengirim :
                            </span>
                            <span
                                style="

                                /* width: auto; */
                                font-size: 11px;
                                font-weight: 500;
                                /* word-wrap: break-word; */
                            ">{{ $shipperName }},
                                {{ $shipperPhone }}
                            </span>
                        </div>
                    </div>
                    <div class="Frame105"
                        style="
                        width: 100%;
                        height: auto;
                        position: relative;
                    ">
                        <div class="Dsadcxzczczxczczczczczczczczxcxzczxczczxxzxxzxzxxzxzxzxx"
                            style="
                            left: 0px;
                            top: 0px;
                            position: relative;
                            color: black;
                            font-size: 10px;
                            /* font-family: Poppins, sans-serif; */
                            font-weight: 500;
                            word-wrap: break-word;
                        ">
                            {{ $shipperAddress }}
                        </div>
                    </div>
                </div>
                <div class="Frame105"
                    style="
                    width: 330px;
                    height: 72px;
                    left: 0px;
                    top: 126px;
                    position: absolute;
                    border-bottom: 2px black solid;
                    padding-left: 10px;
                    padding-right: 10px;
                    padding-top: 6px;
                    padding-bottom: 6px;
                    /* background: blue; */
                ">
                    <div class="Frame106"
                        style="
                        width: 100%;
                        height: auto;
                        margin-bottom: 5px;
                        position: relative;
                    ">
                        <div class="PenerimaSdasd08xxxxxxxxxxxx"
                            style="
                            width: auto;
                            display: flex;
                            position: relative;
                            color: black;
                            font-size: 9px;
                            font-family: Poppins;
                            ">
                            <span
                                style="
                                width: auto;

                                color: black;
                                font-weight: 400;
                                ">Penerima:
                            </span>
                            <span
                                style="
                                /* width: auto; */
                                font-size: 11px;
                                font-weight: 500;
                                /* word-wrap: break-word; */
                            ">{{ $recipientName }},
                                {{ $recipientPhone }}</span>
                        </div>
                    </div>
                    <div class="Frame105"
                        style="
                        width: 100%;
                        height: auto;
                        position: relative;
                    ">
                        <div class="Dsadcxzczczxczczczczczczczczxcxzczxczczxxzxxzxzxxzxzxzxx"
                            style="
                            left: 0px;
                            top: 0px;
                            position: relative;
                            color: black;
                            font-size: 10px;
                            font-family: Poppins;
                            font-weight: 500;
                            word-wrap: break-word;
                        ">
                            {{ $recipientAddress }}
                        </div>
                    </div>
                </div>
                <div class="Frame107"
                    style="
                    width: 350px;
                    height: 150px;
                    left: 0px;
                    top: 212px;
                    position: absolute;
                    border-bottom: 2px black solid;
                ">
                    <div class="Product-Info-Right"
                        style="
                        width: 113px;
                        height: 150px;
                        left: 235px;
                        top: 0px;
                        position: relative;
                        border-left: 2px black solid;
                    ">
                        <div class="Product Column"
                            style="
                            width: auto;
                            height: auto;
                            left: 0px;
                            top: 0px;
                            /* margin: 0px, 16px; */
                            position: relative;
                            background: black;
                        ">
                            <div class="SameDay"
                                style="
                                left: 0px;
                                top: 0px;
                                width: auto;
                                text-align: center;
                                /* background: blue; */
                                padding-top: 14px;
                                padding-bottom: 14px;
                                color: white;
                            ">
                                <div
                                    style="
                                /* background: green; */
                                font-size: 13px;
                                font-family: Poppins;
                                font-weight: 700;
                                ">
                                    @switch($service)
                                        @case(1)
                                            INSTANT
                                        @break

                                        @case(2)
                                            SAMEDAY
                                        @break

                                        @default
                                    @endswitch
                                </div>
                            </div>
                        </div>

                        <div class="Payment Type Column"
                            style="
                            width: auto;
                            left: 0px;
                            top: 0px;
                            text-align: center;
                            position: relative;
                            padding-top: 10px;
                            padding-bottom: 10px;
                            background: none;
                            border-bottom: 2px black solid;
                        ">
                            <div class="NonCod"
                                style="
                                position: relative;
                                color: black;
                                font-size: 10px;
                                font-family: Poppins;
                                font-weight: 600;
                            ">
                                {{ $cod_fee }}
                            </div>
                        </div>

                        <div class="Total Payment Column"
                            style="
                            width: auto;
                            height: auto;
                            left: 0px;
                            top: 0px;
                            position: relative;
                            background: none;
                        ">
                            <div class="TotalBiaya"
                                style="
                                left: 0px;
                                top: 0px;
                                width: auto;
                                position: relative;
                                padding-top: 6px;
                                text-align: center;
                                /* margin-top: 5px; */
                                color: black;
                                font-size: 11px;
                                font-family: Poppins;
                                font-weight: 400;
                                word-wrap: break-word;
                            ">
                                Total Biaya
                            </div>
                            <div class="Rp000000"
                                style="
                                width: auto;
                                left: 0px;
                                top: 0px;
                                padding-top: 23px;
                                padding-bottom: 23px;
                                position: relative;
                                color: black;
                                text-align: center;
                                font-size: 13px;
                                font-family: Poppins;
                                font-weight: 700;
                            ">
                                Rp{{ number_format($totalPrice, 0, ',', '.') }}
                            </div>
                        </div>
                    </div>

                    <div class="Product-Info-Left"
                        style="
                        width: 235px;
                        height: 150px;
                        left: 0px;
                        top: 0px;
                        position: absolute;
                        background: none;
                    ">
                        <div class="Item-Info"
                            style="
                            width: auto;
                            height: fit-content;
                            margin-top: 6px;
                            margin-bottom: 44px;
                            position: relative;
                            background: none;
                        ">

                            <div class="Berat-Kotor"
                                style="
                                width: auto;
                                background: none;
                                padding-left: 10px;
                                padding-right: 10px;
                                padding-bottom: 4px;
                                position: relative;
                                display: flex;
                                align-items: baseline;
                                /* -webkit-justify-content: space-between; */
                            ">
                                <div class="Text"
                                    style="
                                    width: auto;
                                    display: inline;
                                    background: none;
                                    margin-right: auto;
                                ">
                                    <span
                                        style="
                                        color: black;
                                        font-size: 10px;
                                        font-family: Poppins;
                                        font-weight: 400;
                                        word-wrap: break-word;
                                    ">
                                        Berat Kotor :
                                    </span>
                                </div>

                                <div class="Number"
                                    style="
                                    display: inline;
                                    left: 145px;
                                    top: 0px;
                                    width: 80px;
                                    position: absolute;
                                    background: none;
                                    text-align: right;
                                ">
                                    <span
                                        style="
                                        color: black;
                                        font-size: 10px;
                                        font-family: Poppins;
                                        font-weight: 400;
                                    ">{{ $grossWeight }}Kg
                                        /
                                    </span>
                                    <span
                                        style="
                                        color: black;
                                        font-size: 10px;
                                        font-family: Poppins;
                                        font-weight: 700;
                                        ">{{ $grossWeight }}Kg
                                    </span>
                                </div>

                            </div>

                            <div class="Berat-Volume"
                                style="
                                width: auto;
                                background: none;
                                padding-left: 10px;
                                padding-right: 10px;
                                padding-bottom: 4px;
                                position: relative;
                                display: flex;
                                align-items: baseline;
                            ">
                                <div class="Text"
                                    style="
                                    width: auto;
                                    display: inline;
                                    background: none;
                                    margin-right: auto;
                                ">
                                    <span
                                        style="
                                        color: black;
                                        font-size: 10px;
                                        font-family: Poppins;
                                        font-weight: 400;
                                        word-wrap: break-word;
                                    ">
                                        Berat Volume :
                                    </span>
                                </div>

                                <div class="Number-Berat-Volume"
                                    style="
                                    display: inline;
                                    left: 95px;
                                    top: 0px;
                                    width: 130px;
                                    position: absolute;
                                    background: none;
                                    text-align: right;
                                ">
                                    <span
                                        style="
                                        color: black;
                                        font-size: 10px;
                                        font-family: Poppins;
                                        font-weight: 400;
                                        text-align: right;
                                        ">
                                        {{ $p }} x {{ $l }} x {{ $t }} Cm /
                                    </span>
                                    <span
                                        style="
                                        color: black;
                                        font-size: 10px;
                                        font-family: Poppins;
                                        font-weight: 700;
                                    ">
                                        {{ $dimentionalWeight }}Kg
                                    </span>
                                </div>
                            </div>

                            <div class="Total-Berat"
                                style="
                                width: auto;
                                background: none;
                                padding-left: 10px;
                                padding-right: 10px;
                                padding-bottom: 4px;
                                position: relative;
                                display: flex;
                                align-items: baseline;
                                /* -webkit-justify-content: space-between; */
                            ">
                                <div class="Text"
                                    style="
                                    width: auto;
                                    display: inline;
                                    background: none;
                                    margin-right: auto;
                                ">
                                    <span
                                        style="
                                        color: black;
                                        font-size: 10px;
                                        font-family: Poppins;
                                        font-weight: 400;
                                        word-wrap: break-word;
                                    ">
                                        Total Berat :
                                    </span>
                                </div>
                                <div class="Number"
                                    style="
                                    display: inline;
                                    left: 145px;
                                    text-align: right;
                                    width: 80px;
                                    top: 0px;
                                    position: absolute;
                                    background: none;
                                ">
                                    <span
                                        style="
                                        color: black;
                                        font-size: 10px;
                                        font-family: Poppins;
                                        font-weight: 400;
                                    ">00Kg
                                        /
                                    </span>
                                    <span
                                        style="
                                        color: black;
                                        font-size: 10px;
                                        font-family: Poppins;
                                        font-weight: 700;
                                        ">{{ $weightCharge }}Kg
                                    </span>
                                </div>

                            </div>

                            <div class="Total-Jarak"
                                style="
                                width: auto;
                                background: none;
                                padding-left: 10px;
                                padding-right: 10px;
                                padding-bottom: 4px;
                                position: relative;
                                display: flex;
                                align-items: baseline;
                                /* -webkit-justify-content: space-between; */
                            ">
                                <div class="Text"
                                    style="
                                    width: auto;
                                    display: inline;
                                    background: none;
                                    margin-right: auto;
                                ">
                                    <span
                                        style="
                                        color: black;
                                        font-size: 10px;
                                        font-family: Poppins;
                                        font-weight: 400;
                                        word-wrap: break-word;
                                    ">
                                        Total Jarak :
                                    </span>
                                </div>
                                <div class="Number"
                                    style="
                                    display: inline;
                                    left: 145px;
                                    text-align: right;
                                    width: 80px;
                                    top: 0px;
                                    position: absolute;
                                    background: none;
                                ">
                                    <span
                                        style="
                                        color: black;
                                        font-size: 10px;
                                        font-family: Poppins;
                                        font-weight: 400;
                                    ">{{ $distance }}Km/
                                    </span>
                                    <span
                                        style="
                                        color: black;
                                        font-size: 10px;
                                        font-family: Poppins;
                                        font-weight: 700;
                                        ">{{ $distance_charge }}Km
                                    </span>
                                </div>

                            </div>

                        </div>

                        <div class="Frame109"
                            style="
                            width: auto;
                            height: fit-content;
                            position: relative;
                            background: none;
                        ">
                            <div class="Frame113"
                                style="
                                width: auto;
                                background: none;
                                padding-left: 10px;
                                padding-right: 10px;
                                padding-bottom: 0px;
                                position: relative;
                                display: flex;
                                align-items: baseline;
                                /* -webkit-justify-content: space-between; */
                            ">
                                <div class="GambirGambirJakartaPusat"
                                    style="
                                    width: auto;
                                    display: inline;
                                    background: none;
                                    margin-right: auto;
                                ">
                                    <span
                                        style="
                                        color: black;
                                        font-size: 9px;
                                        font-family: Poppins;
                                        font-weight: 400;
                                        word-wrap: break-word;
                                    ">
                                        {{ $destination }}
                                    </span>
                                </div>
                                <div class="Motor"
                                    style="
                                    display: inline;
                                    left: 194px;
                                    top: 0px;
                                    position: absolute;
                                    background: none;
                                ">
                                    <span
                                        style="
                                        color: black;
                                        font-size: 10px;
                                        font-family: Poppins;
                                        font-weight: 700;
                                        ">Motor
                                    </span>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>
