import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { NavbarComponent } from './navbar/navbar.component';
import { HeaderComponent } from './header/header.component';
import { AboutComponent } from './about/about.component';
import { ServiceComponent } from './service/service.component';
import { SkillsComponent } from './skills/skills.component';
import { ProtfolioComponent } from './protfolio/protfolio.component';
import { TestmonialComponent } from './testmonial/testmonial.component';
import { BlogComponent } from './blog/blog.component';
import { HiremeComponent } from './hireme/hireme.component';
import { ContactComponent } from './contact/contact.component';
import { FooterComponent } from './footer/footer.component';

@NgModule({
  declarations: [
    AppComponent,
    NavbarComponent,
    HeaderComponent,
    AboutComponent,
    ServiceComponent,
    SkillsComponent,
    ProtfolioComponent,
    TestmonialComponent,
    BlogComponent,
    HiremeComponent,
    ContactComponent,
    FooterComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
