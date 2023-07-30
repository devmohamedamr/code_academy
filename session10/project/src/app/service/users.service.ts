import { Injectable } from '@angular/core';
import {HttpClient} from '@angular/common/http'
@Injectable({
  providedIn: 'root'
})
export class UsersService {

  constructor(public api:HttpClient) { }


  getusers(){
    return this.api.get("https://jsonplaceholder.typicode.com/users")
  }
}
