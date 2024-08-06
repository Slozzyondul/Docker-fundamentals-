FROM alpine:3.8 AS build
RUN apk add --no-cache alpine-sdk
WORKDIR /bin
COPY . /bin
RUN gcc -Wall hello.c -o hello
FROM alpine:3.8
COPY --from=build /bin/hello /bin/hello
CMD /bin/hello
