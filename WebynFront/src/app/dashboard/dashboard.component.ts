import { Component, OnInit } from '@angular/core'
import { TrafficService } from '../traffic.service'
import { Chart, registerables } from 'chart.js'
import { TableModule } from 'primeng/table'
import { FormsModule } from '@angular/forms'

@Component({
    selector: 'app-dashboard',
    templateUrl: './dashboard.component.html',
    standalone: true,
    imports: [TableModule, FormsModule],
    styleUrls: ['./dashboard.component.css'],
})
export class DashboardComponent implements OnInit {
    traffics!: { pageUrl: string; traffic: number }[]
    filterValue: number = 0

    constructor(private trafficService: TrafficService) {
        Chart.register(...registerables)
    }

    ngOnInit(): void {
        this.trafficService.getTrafficData().subscribe((data) => {
            this.traffics = data
            const labels = data.map((item: any) => item.page_url)
            const trafficValues = data.map((item: any) => item.traffic)

            const chartData = {
                labels,
                datasets: [
                    {
                        label: 'Traffic number',
                        data: trafficValues,
                        backgroundColor: 'rgba(54, 162, 235, 0.5)',
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1,
                    },
                ],
            }

            const config = {
                type: 'bar' as const,
                data: chartData,
                options: {
                    scales: {
                        y: {
                            beginAtZero: true,
                        },
                    },
                },
            }

            new Chart('myChart', config)
        })
    }

    get filteredTraffics() {
        return this.traffics.filter(
            (traffic) => traffic.traffic >= this.filterValue
        )
    }
}
