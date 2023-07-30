import { Injectable } from '@angular/core';
import {HttpClient} from '@angular/common/http'
@Injectable({
  providedIn: 'root'
})
export class GithubService {

  constructor(public api:HttpClient) { }


  getuser(username:string)
  {
    return this.api.get("https://api.github.com/users/"+username)
  }
}
