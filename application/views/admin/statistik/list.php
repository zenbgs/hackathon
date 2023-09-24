<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-0">
                <?php if($this->session->flashdata('sukses')){ ?>
                <div class="alert alert-success text-white alert-dismissible fade show" role="alert">
                    <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                    <span class="alert-text"><strong>Sukses!</strong>
                        <?= $this->session->flashdata('sukses') ?></span>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <?php } ?>
                <span style="float:left !important">Statistik</span>
                <div class="form-group">
                    <select id="pilih_statistik" class="form-control" onchange="updateChartType()">
                    <option value="agamaChart" selected>Agama</option>
                        <option value="jkChart">Jenis Kelamin</option>
                        <option value="umurChart">Umur</option>
                        <option value="spChart">Status Perkawinan</option>
                    </select>
                </div>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="row">
                    <div class="col-md-12">
                        <div class="chart">
                            <canvas id="pie-chart" class="chart-canvas" ></canvas>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<script>

			// Data define for bar chart


			
			// Code to drow Chart
            // Default chart defined with type: 'bar'

			var ctx = document.getElementById('pie-chart').getContext('2d');
			
			
            var umurChartLbl = ["0-10 Tahun", "11-16 Tahun", "17-20 Tahun", "21+ Tahun"];
            var umurChartData = [10, 30, 200, 50, 400];
            var agamaChartLbl = ["Islam", "Kristen", "Katholik", "Hindu", "Budha"];
            var agamaChartData = [100, 45, 60, 25, 30];
            var jkChartLbl = ["Laki-Laki", "Perempuan"];
            var jkChartData = [500, 400];
            var spChartLbl = ["Sudah Kawin", "Belum Kawin", "Janda", "Duda"];
            var spChartData = [500, 300, 25, 50];
            var barColors = [
            "#b91d47",
            "#00aba9",
            "#2b5797",
            "#e8c3b9",
            "#1e7145"
            ];

            var myChart = new Chart(ctx, {
                            type: "pie",
                            data: {
                                labels: agamaChartLbl,
                                datasets: [{
                                backgroundColor: barColors,
                                data: agamaChartData
                                }]
                            },
                            options: {
                                title: {
                                display: true,
                                text: "Statistik Agama Penduduk"
                                }
                            }
                    });
			// Function runs on chart type select update
            
			function updateChartType() {
            var selector = document.getElementById("pilih_statistik").value;
            // console.log(selector)
                // Destroy the previous chart

				myChart.destroy();

                // Draw a new chart on the basic of dropdown
                if(selector == "agamaChart"){
                        myChart = new Chart(ctx, {
                            type: "pie",
                            data: {
                                labels: agamaChartLbl,
                                datasets: [{
                                backgroundColor: barColors,
                                data: agamaChartData
                                }]
                            },
                            options: {
                                title: {
                                display: true,
                                text: "Statistik Agama Penduduk"
                                }
                            }
                    });
                }else if(selector == "jkChart"){
                        myChart = new Chart(ctx, {
                            type: "pie",
                            data: {
                                labels: jkChartLbl,
                                datasets: [{
                                backgroundColor: barColors,
                                data: jkChartData
                                }]
                            },
                            options: {
                                title: {
                                display: true,
                                text: "Statistik Jenis Kelamin Penduduk"
                                }
                            }
                    });
                }else if(selector == "umurChart"){
                        myChart = new Chart(ctx, {
                            type: "pie",
                data: {
                    labels: umurChartLbl,
                    datasets: [{
                    backgroundColor: barColors,
                    data: umurChartData
                    }]
                },
                options: {
                    title: {
                    display: true,
                    text: "Statistik Umur Penduduk"
                    }
                }
                    });
                }else if(selector == "spChart"){
                        myChart = new Chart(ctx, {
                            type: "pie",
                data: {
                    labels: spChartLbl,
                    datasets: [{
                    backgroundColor: barColors,
                    data: spChartData
                    }]
                },
                options: {
                    title: {
                    display: true,
                    text: "Statistik Status Perkawinan Penduduk"
                    }
                }
                    });
                }
				
			};

		</script>