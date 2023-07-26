import { Component } from '@angular/core';

@Component({
  selector: 'app-contact',
  templateUrl: './contact.component.html',
  styleUrls: ['./contact.component.css']
})
export class ContactComponent {
    title:string = "code academy";
    users:Array<string> = [
      "mohamed",
      "ahmed",
      "eslam"
    ]
}
