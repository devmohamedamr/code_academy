import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { AboutComponent } from './about/about.component';
import { HeaderComponent } from './header/header.component';
import { BlogComponent } from './blog/blog.component';
import { ContactComponent } from './contact/contact.component';
import { HiremeComponent } from './hireme/hireme.component';
import { ProtfolioComponent } from './protfolio/protfolio.component';
import { ServiceComponent } from './service/service.component';
import { SkillsComponent } from './skills/skills.component';
import { TestmonialComponent } from './testmonial/testmonial.component';

const routes: Routes = [
  {path:"",component:HeaderComponent},
  {path:"about",component:AboutComponent},
  {path:"blog",component:BlogComponent},
  {path:"contact",component:ContactComponent},
  {path:"hireme",component:HiremeComponent},
  {path:"portfolio",component:ProtfolioComponent},
  {path:"service",component:ServiceComponent},
  {path:"skills",component:SkillsComponent},
  {path:"testmonial",component:TestmonialComponent}
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
