import { Injectable } from '@angular/core'
import { HttpClient } from '@angular/common/http'
import { Observable } from 'rxjs'

@Injectable({
    providedIn: 'root',
})
export class TrafficService {
    private apiUrl = 'https://127.0.0.1:8000/api/traffic'

    constructor(private http: HttpClient) {}

    getTrafficData(): Observable<{ pageUrl: string; traffic: number }[]> {
        return this.http.get<{ pageUrl: string; traffic: number }[]>(
            this.apiUrl
        )
    }
}
