# A demo app

Roll out changes using Kubernetes:

```
$ kubectl apply -f https://raw.githubusercontent.com/lukemarsden/demo-app/master/demo-app-rc-blue.yaml
replicationcontroller "demo-app" created
```

Go to `<cluster-ip>:3000` in your browser.

```
$ kubectl rolling-update demo-app-blue -f https://raw.githubusercontent.com/lukemarsden/demo-app/master/demo-app-rc-green.yaml
replicationcontroller "demo-app" created
```
