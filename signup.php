package main

import (
    "fmt"
    "io/ioutil"
    "net/http"
    "net/url"
    "os"
)

func main() {
    http.HandleFunc("/", downloadHandler) //   设置访问路由
    http.ListenAndServe(":8080", nil)
}
func downloadHandler(w http.ResponseWriter, r *http.Request) {
    r.ParseForm() //解析url传递的参数，对于POST则解析响应包的主体（request body）
    //注意:如果没有调用ParseForm方法，下面无法获取表单的数据
    fileName := r.Form["filename"] //filename  文件名
    path := "/data/images/"        //文件存放目录
    file, err := os.Open(path + fileName[0])
    if err != nil {
        fmt.Println(err)
        return
    }
    defer file.Close()
    content, err := ioutil.ReadAll(file)
    fileNames := url.QueryEscape(fileName[0]) // 防止中文乱码
    w.Header().Add("Content-Type", "application/octet-stream")
    w.Header().Add("Content-Disposition", "attachment; filename=\""+fileNames+"\"")

    if err != nil {
        fmt.Println("Read File Err:", err.Error())
    } else {
        w.Write(content)
    }
}
