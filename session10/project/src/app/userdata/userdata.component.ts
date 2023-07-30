import { Component } from '@angular/core';
import { GithubService } from '../service/github.service';
@Component({
  selector: 'app-userdata',
  templateUrl: './userdata.component.html',
  styleUrls: ['./userdata.component.css']
})
export class UserdataComponent {
  constructor(public api:GithubService){
    this.api.getuser("devmohamedamr").subscribe((res)=>{
      console.log(res)
    })
  }


  userinfo(){
    // this.api("devmohamedamr").subscribe((res)=>{
    //   console.log(res)
    // })
  }
}
