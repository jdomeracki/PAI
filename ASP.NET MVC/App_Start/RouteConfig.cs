using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;
using System.Web.Routing;

namespace ASP.NET_MVC
{
    public class RouteConfig
    {
        public static void RegisterRoutes(RouteCollection routes)
        {
            routes.IgnoreRoute("{resource}.axd/{*pathInfo}");

            /*routes.MapRoute(
               name: "Songs",
               url: "songs/square/{id}",
               defaults: new { controller = "Songs", action = "Action", id = UrlParameter.Optional }
           );

            routes.MapRoute(
              name: "23",
              url: "",
              defaults: new { controller = "Songs", action = "Action", id = 23 }
          );*/

            routes.MapRoute(
                name: "Default",
                url: "{controller}/{action}/{id}",
                defaults: new { controller = "Songs", action = "Index", id = UrlParameter.Optional }
            );

        }
    }
}
