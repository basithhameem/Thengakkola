from django.shortcuts import render
from django.http import HttpResponse
from thengakkola import dbconnection
#from labreport import cstructure
from django.http import HttpResponseRedirect
from django.template import RequestContext
#Public Views
# Create your views here.

def index(request):
    return render(request,"index.html",{})
def listo(request):
    return render(request,"listo.html",{})
def climber(request):
    return render(request,"climber.html",{})
def lists(request):
    if request.method=='POST':
        a=request.POST.get('u')
        b=request.POST.get('p')
        sql="select * from login where name='"+a+"' and psd='"+b+"'"
        data=dbconnection.selectdata(sql) 
        if data:                        
            if data[1]==a and data[2]==b:
                print("login successfull")
                return HttpResponseRedirect("http://127.0.0.1:8000/listo")
            else:
                print("login failed")
                return HttpResponseRedirect("http://127.0.0.1:8000/listo")
        else:
            print("Login failed")    
            return HttpResponseRedirect("http://127.0.0.1:8000/listo")
    
    return render(request,"index.html",{})

def logsucc(request):
    return render(request,"logsucc.html",{})
    
def logfail(request):
        return render(request,"logfail.html",{})
def about(request):
    return render(request,"about.html",{})
    