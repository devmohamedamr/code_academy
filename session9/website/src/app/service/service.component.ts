import { Component } from '@angular/core';

@Component({
  selector: 'app-service',
  templateUrl: './service.component.html',
  styleUrls: ['./service.component.css']
})
export class ServiceComponent {
  service_items:Array<string> =[
    "UI/UX Design",
    "mohamed",
    "ahmed",
    "eslam"
  ]
}
