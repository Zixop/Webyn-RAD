import { Component, OnInit } from '@angular/core'
import { Menubar } from 'primeng/menubar'
import { MenuItem } from 'primeng/api'

@Component({
    selector: 'app-navbar',
    imports: [Menubar],
    templateUrl: './navbar.component.html',
    standalone: true,
    styleUrl: './navbar.component.css',
})
export class NavbarComponent implements OnInit {
    items: MenuItem[] | undefined

    ngOnInit() {
        this.items = [
            {
                label: 'Home',
                icon: 'pi pi-home',
                routerLink: 'home',
            },
            {
                label: 'Dashboard',
                icon: 'pi pi-chart-bar',
                routerLink: 'dashboard',
            },
        ]
    }
}
