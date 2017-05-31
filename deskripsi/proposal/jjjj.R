#IHDA AINI FATKHIAH
#G64150031

#1.visualisasi data
datakecil <- read.csv("D:/metkuan/kecil_data.csv")
View(datakecil)
summary(datakecil)

pca <- prcomp(datakecil[,1:23])
View(pca)
summary(pca)

biplot(pca, cex=0.8, col=c("purple","red"))
plot(pca)
plot(pca$x[,1],pca$x[,2])

#2 mengambil 10 data

pca$x[1:10,1:2]

#3 buatlah agglomerative hc 
datalagi <- pca$x[1:10,1:2]
dataplot <- as.data.frame(datalagi)
View(dataplot)
cluster <-hclust(dist(dataplot))

#4 buat dendogram
plot(cluster)