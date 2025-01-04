import { Component } from '@angular/core'
import { RouterLink, RouterOutlet } from '@angular/router'
import { NavbarComponent } from './components/navbar/navbar.component'

@Component({
    selector: 'app-root',
    imports: [RouterOutlet, NavbarComponent],
    templateUrl: './app.component.html',
    styleUrls: ['./app.component.css'],
    standalone: true,
})
export class AppComponent {
    title = 'Webyn'
}
