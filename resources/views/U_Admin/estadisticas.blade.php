@extends('Layouts.menu_admin')

@section('title')
Proyecto - Libros
@endsection

@section('content')
<!-- <div class="container">

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title mb-4">Donut Pie</h4>

                    <div class="row text-center mb-3">
                        <div class="col-4">
                            <h5 class="mb-0">5484</h5>
                            <p class="text-muted text-truncate">Activated</p>
                        </div>
                        <div class="col-4">
                            <h5 class="mb-0">964984</h5>
                            <p class="text-muted text-truncate">Pending</p>
                        </div>
                        <div class="col-4">
                            <h5 class="mb-0">98498</h5>
                            <p class="text-muted text-truncate">Deactivated</p>
                        </div>
                    </div>

                    <div id="donut-chart">
                        <div id="donut-chart-container"
                            data-colors="[&quot;--bs-light&quot;,&quot;--bs-primary&quot;, &quot;--bs-success&quot;]"
                            class="flot-charts flot-charts-height" style="padding: 0px; position: relative;">
                            <canvas class="flot-base" width="473" height="320"
                                style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 473.5px; height: 320px;"></canvas><canvas
                                class="flot-overlay" width="473" height="320"
                                style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 473.5px; height: 320px;"></canvas>
                            <div class="legend">
                                <div
                                    style="position: absolute; width: 74px; height: 60px; top: 50px; right: 50px; background-color: transparent; opacity: 0.85;">
                                </div>
                                <table style="position:absolute;top:50px;right:50px;;font-size:smaller;color:#545454">
                                    <tbody>
                                        <tr>
                                            <td class="legendColorBox">
                                                <div style="border:1px solid null;padding:1px">
                                                    <div
                                                        style="width:4px;height:0;border:5px solid rgb(240,241,244);overflow:hidden">
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="legendLabel">
                                                <div style="font-size:12px;">&nbsp;Desktops</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="legendColorBox">
                                                <div style="border:1px solid null;padding:1px">
                                                    <div
                                                        style="width:4px;height:0;border:5px solid rgb(85,110,230);overflow:hidden">
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="legendLabel">
                                                <div style="font-size:12px;">&nbsp;Laptops</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="legendColorBox">
                                                <div style="border:1px solid null;padding:1px">
                                                    <div
                                                        style="width:4px;height:0;border:5px solid rgb(52,195,143);overflow:hidden">
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="legendLabel">
                                                <div style="font-size:12px;">&nbsp;Tablets</div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div> -->

@foreach ($query as $item )
<h3>{{$item}}</h3>
@endforeach
@endsection