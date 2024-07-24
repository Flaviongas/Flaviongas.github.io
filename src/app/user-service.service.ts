import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import { Observable } from 'rxjs';
const headerDict = {
  'Content-Type': 'application/json',
  Accept: 'application/json',
  'Access-Control-Allow-Headers': 'Content-Type',
  'X-Api-Key': 'mCDYKcYa3rz9iF6+xTYJ9g==NEm5kHlc3hdbfHrV',
  'Access-Control-Allow-Origin': '*',
  'Access-Control-Allow-Methods': 'GET, POST, PUT, DELETE, PATCH, OPTIONS',
};
const requestOptions = {
  headers: new HttpHeaders(headerDict),
};
@Injectable({
  providedIn: 'root',
})
export class UserServiceService {
  private apiUrl =
    'https://thingproxy.freeboard.io/fetch/https://zenquotes.io/api/random'; // Replace with your API endpoint

  constructor(private http: HttpClient) {}

  fetchUsers(): Observable<any[]> {
    return this.http.get<any[]>(this.apiUrl, requestOptions);
  }
}
