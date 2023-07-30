import { Component } from '@angular/core';
import { UsersService } from '../service/users.service';
@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.css']
})
export class HomeComponent {
  data:any;
  constructor(public users:UsersService){
      this.users.getusers().subscribe((res)=>{
        this.data = res
        console.log(res)
      })
  }
}
